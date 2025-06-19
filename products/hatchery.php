<?php
include '../php/header.php';

// Load data from JSON
$dataFile = '../admin/data.json';
$blocks = [];

if (file_exists($dataFile)) {
    $json = file_get_contents($dataFile);
    $data = json_decode($json, true);
    if (isset($data['pages']['hatchery.php']['blocks'][0])) {
        $mainBlock = $data['pages']['hatchery.php']['blocks'][0];
        $blocks = reset($mainBlock); // Get the first key's value (array of blocks)
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Hatchery</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/products/hatchery.css">

  <style>
    html, body { height: 100%; margin: 0; display: flex; flex-direction: column; font-family: 'Segoe UI', sans-serif; }
    body { background: white; }
    .main-content { flex: 1; padding: 40px 0; }
    .carousel-container { max-width: 900px; margin: auto; box-shadow: 0 0 30px rgba(0,0,0,0.5); border-radius: 16px; overflow: hidden; }
    .carousel-item img { width: 100%; height: 500px; object-fit: cover; filter: brightness(90%); transition: transform 0.6s ease, filter 0.3s ease; }
    .carousel-item img:hover { transform: scale(1.03); filter: brightness(100%); }
    .carousel-indicators [data-bs-target] { background-color: rgba(0,0,0,0.5); width: 12px; height: 12px; border-radius: 50%; }
    @keyframes fadeInUp { 0% { opacity: 0; transform: translateY(40px); } 100% { opacity: 1; transform: translateY(0); } }
    .animate-fade { animation: fadeInUp 1s ease forwards; }
    .animate-slide { opacity: 0; transform: translateY(40px); animation: fadeInUp 1s ease forwards; }
    .animate-slide:nth-child(2n) { animation-delay: 0.3s; }
    .animate-slide:nth-child(3n) { animation-delay: 0.5s; }
    .animate-slide:nth-child(4n) { animation-delay: 0.7s; }
  </style>
</head>
<body>

<!-- Carousel Section -->
<div class="main-content">
  <div class="carousel-container">
    <div id="advancedCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#advancedCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#advancedCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#advancedCarousel" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#advancedCarousel" data-bs-slide-to="3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active"><img src="../images/hatchery/hatcher-images1.jpg" class="d-block w-100" alt="Image 1"></div>
        <div class="carousel-item"><img src="../images/hatchery/hatcher-images2.jpg" class="d-block w-100" alt="Image 2"></div>
        <div class="carousel-item"><img src="../images/hatchery/hatcher-images3.jpg" class="d-block w-100" alt="Image 3"></div>
        <div class="carousel-item"><img src="../images/hatchery/hatcher-images4.jpg" class="d-block w-100" alt="Image 4"></div>
      </div>
    </div>
  </div>
</div>

<!-- Hatchery Services Section -->
<div class="hatchery-services py-5 px-3">
  <div class="container">
    <h2 class="text-center mb-5 fw-bold animate-fade">🐣 JJ Tech Solutions – Hatchery Poultry Services</h2>
    <div class="row g-4">
      <?php foreach ($blocks as $block): ?>
        <div class="col-md-6 animate-slide">
          <div class="p-4 border rounded bg-light shadow-sm">
            <h5><?= htmlspecialchars($block['title']) ?></h5>
            <?php if (!empty($block['features'])): ?>
              <ul>
                <?php foreach ($block['features'] as $feature): ?>
                  <li><?= htmlspecialchars($feature) ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- Footer -->
<?php include '../php/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
