<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $filename = trim($_POST['filename']);
    $blocksInput = $_POST['blocks'] ?? [];

    $jsonFile = 'data.json';
    if (!file_exists($jsonFile)) {
        die("Data file not found.");
    }

    $data = json_decode(file_get_contents($jsonFile), true);

    if (!isset($data['pages'][$filename])) {
        header("Location: dashboard.php?error=InvalidPage");
        exit();
    }

    $originalBlocks = $data['pages'][$filename]['blocks'];
    $newBlocks = [];

    foreach ($originalBlocks as $i => $block) {
        // Handle plain text block
        if (is_string($block)) {
            $key = "block_$i";
            if (isset($blocksInput[$key]) && trim($blocksInput[$key]) !== '') {
                $newBlocks[] = trim($blocksInput[$key]);
            }
        }
        // Header-content block
        elseif (is_array($block) && isset($block['header'], $block['content'])) {
            $header = trim($blocksInput["block_{$i}"]["header"] ?? '');
            $content = trim($blocksInput["block_{$i}"]["content"] ?? '');
            if ($header !== '' && $content !== '') {
                $newBlocks[] = [
                    'header' => $header,
                    'content' => $content
                ];
            }
        }
        // Expertise block
        elseif (is_array($block) && isset($block['type']) && $block['type'] === 'expertise') {
            $expertiseData = [];
            foreach ($block['data'] as $j => $item) {
                $title = trim($blocksInput["expertise_{$i}_{$j}_title"] ?? '');
                $icon = trim($blocksInput["expertise_{$i}_{$j}_icon"] ?? '');
                $desc = trim($blocksInput["expertise_{$i}_{$j}_description"] ?? '');

                if ($title && $desc) {
                    $expertiseData[] = [
                        'title' => $title,
                        'icon' => $icon,
                        'description' => $desc
                    ];
                }
            }

            if (!empty($expertiseData)) {
                $newBlocks[] = [
                    'type' => 'expertise',
                    'data' => $expertiseData
                ];
            }
        }
        // Hatchery-style block (e.g., { "Section Title": [ { title, features[] } ] })
        elseif (is_array($block) && count($block) === 1 && is_array(reset($block))) {
            $sectionTitle = array_keys($block)[0];
            $featureList = $block[$sectionTitle];
            $rebuiltFeatures = [];

            foreach ($featureList as $j => $feat) {
                $titleKey = "hatchery_{$i}_{$j}_title";
                if (!isset($blocksInput[$titleKey])) continue;

                $title = trim($blocksInput[$titleKey]);
                $features = [];

                foreach ($blocksInput as $k => $val) {
                    if (str_starts_with($k, "hatchery_{$i}_{$j}_feature_")) {
                        $features[] = trim($val);
                    }
                }

                if ($title !== '' && !empty($features)) {
                    $rebuiltFeatures[] = [
                        'title' => $title,
                        'features' => array_filter($features)
                    ];
                }
            }

            if (!empty($rebuiltFeatures)) {
                $newBlocks[] = [
                    $sectionTitle => $rebuiltFeatures
                ];
            }
        }
        // Unknown format
        else {
            $newBlocks[] = $block;
        }
    }

    // Handle new plain text blocks
    foreach ($blocksInput as $key => $value) {
        if (str_starts_with($key, 'new_text_') && trim($value) !== '') {
            $newBlocks[] = trim($value);
        }
        elseif (str_starts_with($key, 'new_structured_') && is_array($value)) {
            $header = trim($value['header'] ?? '');
            $content = trim($value['content'] ?? '');
            if ($header !== '' && $content !== '') {
                $newBlocks[] = [
                    'header' => $header,
                    'content' => $content
                ];
            }
        }
    }

    // Save the updated blocks
    $data['pages'][$filename]['blocks'] = $newBlocks;
    file_put_contents($jsonFile, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    header("Location: dashboard.php?success=1&page=" . urlencode($filename));
    exit();
} else {
    header("Location: dashboard.php");
    exit();
}
