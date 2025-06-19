<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

$dataFile = 'data.json';
$data = json_decode(file_get_contents($dataFile), true);
$selectedPage = $_GET['page'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Dashboard | JJ TECH SOLUTIONS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .page-btn {
      margin: 5px;
    }
    textarea {
      resize: vertical;
    }
  </style>
</head>
<body class="bg-light">
<div class="container py-5">

  <h2 class="mb-4">Admin Dashboard</h2>

  <?php if (isset($_GET['success'])): ?>
    <div class="alert alert-success">Changes saved successfully!</div>
  <?php endif; ?>

  <!-- Static Page Buttons -->
  <div class="mb-4">
    <h5>Select a Page to Edit</h5>
    <?php foreach ($data['pages'] as $filename => $page): ?>
      <a href="?page=<?= urlencode($filename) ?>" class="btn btn-outline-primary page-btn">
        <?= htmlspecialchars($page['title'] ?? $filename) ?>
      </a>
    <?php endforeach; ?>
    <a href="?new=1" class="btn btn-success page-btn">+ Add New Page</a>
  </div>

  <!-- Add New Page -->
  <?php if (isset($_GET['new'])): ?>
    <div class="card p-4 shadow mb-4">
      <h5 class="mb-3">Create New Page</h5>
      <form method="POST" action="add_page.php">
        <div class="mb-3">
          <label class="form-label">Page Title</label>
          <input type="text" name="title" class="form-control" placeholder="Page Title" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Filename</label>
          <input type="text" name="filename" class="form-control" placeholder="Filename (e.g., about.php)" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Page</button>
      </form>
    </div>
  <?php endif; ?>

  <!-- Edit Blocks for Selected Page -->
  <?php if ($selectedPage && isset($data['pages'][$selectedPage])): ?>
    <div class="card p-4 shadow">
      <h5 class="mb-4">Editing Page: <?= htmlspecialchars($selectedPage) ?></h5>
      <form method="POST" action="edit_page_blocks.php">
        <input type="hidden" name="filename" value="<?= htmlspecialchars($selectedPage) ?>">

        <?php foreach ($data['pages'][$selectedPage]['blocks'] as $i => $block): ?>
          <div class="mb-3">
            <label class="form-label">Block <?= $i + 1 ?></label>
            <textarea name="blocks[block_<?= $i ?>]" class="form-control" rows="3"><?= htmlspecialchars($block) ?></textarea>
          </div>
        <?php endforeach; ?>

        <!-- New Block -->
        <div class="mb-3">
          <label class="form-label">New Block</label>
          <textarea name="blocks[new_<?= time() ?>]" class="form-control" rows="3" placeholder="Add new block..."></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>
      </form>
    </div>
  <?php endif; ?>

</div>
</body>
</html>
