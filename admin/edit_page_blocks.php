<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $filename = trim($_POST['filename']);
    $blocks = $_POST['blocks'] ?? [];

    // Keep only non-empty trimmed values, preserving order
    $cleanedBlocks = array_values(array_filter(array_map('trim', $blocks), fn($b) => $b !== ''));

    $jsonFile = 'data.json';
    if (!file_exists($jsonFile)) {
        die("Data file not found.");
    }

    $data = json_decode(file_get_contents($jsonFile), true);

    if (isset($data['pages'][$filename])) {
        $data['pages'][$filename]['blocks'] = $cleanedBlocks;

        file_put_contents($jsonFile, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        header("Location: dashboard.php?success=1");
        exit();
    } else {
        header("Location: dashboard.php?error=InvalidPage");
        exit();
    }
} else {
    header("Location: dashboard.php");
    exit();
}
