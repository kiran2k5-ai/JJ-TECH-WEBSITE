<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['filename']) && isset($_POST['blocks'])) {
    $filename = $_POST['filename'];
    $blocks = array_filter(array_map('trim', $_POST['blocks'])); // Remove empty blocks

    $dataFile = 'data.json';
    $data = json_decode(file_get_contents($dataFile), true);

    if (!isset($data['pages'][$filename])) {
        $data['pages'][$filename] = ['title' => $filename, 'blocks' => []];
    }

    $data['pages'][$filename]['blocks'] = array_values($blocks); // Re-index

    file_put_contents($dataFile, json_encode($data, JSON_PRETTY_PRINT));
    header("Location: dashboard.php?success=1");
    exit();
} else {
    header("Location: dashboard.php");
    exit();
}
