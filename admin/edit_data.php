<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

$dataFile = 'data.json';
$data = json_decode(file_get_contents($dataFile), true);
$pages = array_keys($data['pages']);
$selectedPage = $_POST['filename'] ?? null;
$blocks = $selectedPage && isset($data['pages'][$selectedPage]['blocks']) ? $data['pages'][$selectedPage]['blocks'] : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Page Blocks - JJ TECH SOLUTIONS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background-color: #f4f6f9; font-family: 'Poppins', sans-serif; }
    .container { max-width: 800px; padding-top: 60px; }
    textarea { resize: vertical; }
  </style>
</head>
<body>

<div class="container">
  <h2 class="mb-4">Edit Page Content Blocks</h2>

  <!-- Step 1: Page Selection -->
  <form method="POST" class="mb-4">
    <div class="mb-3">
      <label for="filename" class="form-label">Select Page</label>
      <select name="filename" id="filename" class="form-select" onchange="this.form.submit()" required>
        <option value="">-- Choose Page --</option>
        <?php foreach ($pages as $page): ?>
          <option value="<?= htmlspecialchars($page) ?>" <?= $page === $selectedPage ? 'selected' : '' ?>>
            <?= $page ?>
          </option>
        <?php endforeach; ?>
      </select>
    </div>
  </form>

  <!-- Step 2: Block Editor -->
  <?php if ($selectedPage): ?>
    <form action="save_blocks.php" method="POST">
      <input type="hidden" name="filename" value="<?= htmlspecialchars($selectedPage) ?>">

      <?php foreach ($blocks as $i => $text): ?>
        <div class="mb-3">
          <label class="form-label">Block <?= $i + 1 ?></label>
          <textarea name="blocks[]" class="form-control" rows="3" required><?= htmlspecialchars($text) ?></textarea>
        </div>
      <?php endforeach; ?>

      <!-- Empty block for adding new content -->
      <div class="mb-3">
        <label class="form-label">New Block</label>
        <textarea name="blocks[]" class="form-control" rows="3" placeholder="Add new content block..."></textarea>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary px-4">Save Changes</button>
      </div>
    </form>
  <?php endif; ?>

  <?php if (isset($_GET['success'])): ?>
    <div class="alert alert-success mt-4">Changes saved successfully!</div>
  <?php endif; ?>
</div>

</body>
</html>
