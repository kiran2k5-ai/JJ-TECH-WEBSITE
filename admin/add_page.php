<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

$dataFile = 'data.json';
if (!file_exists($dataFile)) {
    die("Data file not found.");
}

$data = json_decode(file_get_contents($dataFile), true);

$title = trim($_POST['title'] ?? '');
$filename = trim($_POST['filename'] ?? '');

if (!$title || !$filename) {
    header("Location: dashboard.php?error=Missing+data");
    exit();
}

// Add to JSON
$data['pages'][$filename] = [
    'title' => $title,
    'blocks' => []
];

file_put_contents($dataFile, json_encode($data, JSON_PRETTY_PRINT));

// Optionally create a basic PHP file if it doesn't exist
$pagePath = "../" . $filename;
if (!file_exists($pagePath)) {
    $template = <<<PHP
<?php
// Auto-generated page: $filename
include 'php/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>$title</title>
</head>
<body>
  <div class="container py-5">
    <h1>$title</h1>
    <p>This page was generated from the admin panel.</p>
  </div>
</body>
</html>
PHP;

    file_put_contents($pagePath, $template);
}

header("Location: dashboard.php?page=" . urlencode($filename) . "&success=Page+created");
exit();
