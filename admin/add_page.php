<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

$dataFile = 'data.json';
$data = json_decode(file_get_contents($dataFile), true);

// Get inputs
$title = trim($_POST['title']);
$filename = trim($_POST['filename']);

// Add to pages array
$data['pages'][] = ['title' => $title, 'filename' => $filename];

// Save back
file_put_contents($dataFile, json_encode($data, JSON_PRETTY_PRINT));

// Redirect
header("Location: dashboard.php?success=1");
exit();
