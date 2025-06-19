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
$selectedPage = $_GET['page'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Dashboard | JJ TECH SOLUTIONS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .page-btn { margin: 5px; }
    textarea { resize: vertical; }
    input.form-control-sm { margin-bottom: 5px; }
    .card-block { padding: 15px; background: #f9f9f9; border-radius: 8px; margin-bottom: 15px; }
    label.form-label { font-weight: 600; }
    .expertise-card, .feature-card { background-color: #fff; border: 1px solid #ddd; padding: 10px; border-radius: 5px; margin-bottom: 10px; }
  </style>
</head>
<body class="bg-light">
<div class="container py-5">
  <h2 class="mb-4">Admin Dashboard</h2>

  <?php if (isset($_GET['success'])): ?>
    <div class="alert alert-success">Changes saved successfully!</div>
  <?php elseif (isset($_GET['error'])): ?>
    <div class="alert alert-danger">Error: <?= htmlspecialchars($_GET['error']) ?></div>
  <?php endif; ?>

  <!-- Page Buttons -->
  <div class="mb-4">
    <h5>Select a Page to Edit</h5>
    <?php if (isset($data['pages']) && is_array($data['pages'])): ?>
      <?php foreach ($data['pages'] as $filename => $page): ?>
        <a href="?page=<?= urlencode($filename) ?>" class="btn btn-outline-primary page-btn">
          <?= htmlspecialchars($page['title'] ?? $filename) ?>
        </a>
      <?php endforeach; ?>
    <?php endif; ?>
    <a href="?new=1" class="btn btn-success page-btn">+ Add New Page</a>
  </div>

  <!-- Add New Page -->
  <?php if (isset($_GET['new'])): ?>
    <div class="card p-4 shadow mb-4">
      <h5 class="mb-3">Create New Page</h5>
      <form method="POST" action="add_page.php">
        <div class="mb-3">
          <label class="form-label">Page Title</label>
          <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Filename</label>
          <input type="text" name="filename" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Page</button>
      </form>
    </div>
  <?php endif; ?>

  <!-- Edit Page Blocks -->
  <?php if ($selectedPage && isset($data['pages'][$selectedPage])): ?>
    <div class="card p-4 shadow">
      <h5 class="mb-4">Editing Page: <?= htmlspecialchars($selectedPage) ?></h5>
      <form method="POST" action="edit_page_blocks.php">
        <input type="hidden" name="filename" value="<?= htmlspecialchars($selectedPage) ?>">

        <?php
        $blocks = $data['pages'][$selectedPage]['blocks'] ?? [];

        if (!empty($blocks)) {
          foreach ($blocks as $i => $block):
            echo '<div class="card-block">';
            if (is_string($block)): ?>
              <label class="form-label">Text Block <?= $i + 1 ?></label>
              <textarea name="blocks[block_<?= $i ?>]" class="form-control" rows="3"><?= htmlspecialchars($block) ?></textarea>

            <?php elseif (is_array($block) && isset($block['header'], $block['content'])): ?>
              <label class="form-label">Header Block <?= $i + 1 ?></label>
              <input type="text" class="form-control form-control-sm" name="blocks[block_<?= $i ?>][header]" value="<?= htmlspecialchars($block['header']) ?>">
              <textarea name="blocks[block_<?= $i ?>][content]" class="form-control form-control-sm" rows="2"><?= htmlspecialchars($block['content']) ?></textarea>

            <?php elseif (is_array($block) && isset($block['type']) && $block['type'] === 'expertise'): ?>
              <label class="form-label">Expertise Block <?= $i + 1 ?></label>
              <?php foreach ($block['data'] as $j => $item): ?>
                <div class="expertise-card">
                  <input type="text" class="form-control form-control-sm mb-2" name="blocks[expertise_<?= $i ?>_<?= $j ?>_title]" value="<?= htmlspecialchars($item['title']) ?>" placeholder="Title">
                  <input type="text" class="form-control form-control-sm mb-2" name="blocks[expertise_<?= $i ?>_<?= $j ?>_icon]" value="<?= htmlspecialchars($item['icon']) ?>" placeholder="Icon Filename">
                  <textarea class="form-control form-control-sm" name="blocks[expertise_<?= $i ?>_<?= $j ?>_description]" rows="2"><?= htmlspecialchars($item['description']) ?></textarea>
                </div>
              <?php endforeach; ?>

            <?php elseif (is_array($block) && count($block) === 1 && is_array(reset($block))): 
              // Custom Hatchery Block
              $sectionTitle = array_keys($block)[0];
              $features = $block[$sectionTitle];
              ?>
              <label class="form-label"><?= htmlspecialchars($sectionTitle) ?></label>
              <?php foreach ($features as $j => $feature): ?>
                <div class="feature-card">
                  <input type="text" class="form-control form-control-sm mb-2" name="blocks[hatchery_<?= $i ?>_<?= $j ?>_title]" value="<?= htmlspecialchars($feature['title']) ?>" placeholder="Feature Title">
                  <label class="form-label small">Features</label>
                  <?php foreach ($feature['features'] as $k => $f): ?>
                    <input type="text" class="form-control form-control-sm mb-1" name="blocks[hatchery_<?= $i ?>_<?= $j ?>_feature_<?= $k ?>]" value="<?= htmlspecialchars($f) ?>">
                  <?php endforeach; ?>
                  <input type="text" class="form-control form-control-sm mt-2" name="blocks[hatchery_<?= $i ?>_<?= $j ?>_feature_new]" placeholder="Add New Feature...">
                </div>
              <?php endforeach; ?>

            <?php else: ?>
              <div class="text-muted">Block <?= $i + 1 ?> is unsupported.</div>
            <?php endif;
            echo '</div>';
          endforeach;
        } else {
          echo "<p class='text-muted'>No blocks found for this page. You can add new blocks below.</p>";
        }
        ?>

        <!-- Add new plain text block -->
        <div class="card-block">
          <label class="form-label">Add New Text Block</label>
          <textarea name="blocks[new_text_<?= time() ?>]" class="form-control" rows="3" placeholder="Enter new block text..."></textarea>
        </div>

        <!-- Add new header-content block -->
        <div class="card-block">
          <label class="form-label">Add New Header Block</label>
          <input type="text" class="form-control form-control-sm mb-2" name="blocks[new_structured_<?= time() ?>][header]" placeholder="Header">
          <textarea class="form-control form-control-sm" name="blocks[new_structured_<?= time() ?>][content]" placeholder="Content" rows="2"></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Save Changes</button>
      </form>
    </div>
  <?php endif; ?>
</div>
</body>
</html>
