<?php
$dataFile = '../admin/data.json';
$blocks = [];

if (file_exists($dataFile)) {
    $json = file_get_contents($dataFile);
    $data = json_decode($json, true);
    if (isset($data['pages']['breeder.php']['blocks'])) {
        $blocks = $data['pages']['breeder.php']['blocks'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Breeder Management</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/products/breeder.css">
</head>
<body>

<?php include '../php/header.php'; ?>

<div class="coverflow-container">
  <div class="coverflow" id="coverflow">
    <?php for ($i = 1; $i <= 4; $i++): ?>
      <label><img src="../images/breeder/breeder-image<?= $i ?>.jpg" alt="<?= $i ?>"></label>
      <label><img src="../images/breeder/breeder-image<?= $i ?>.jpg" alt="<?= $i ?>"></label>
    <?php endfor; ?>
  </div>
</div>

<div class="feature-section">
  <div class="text-center mb-5">
    <h2 class="fw-bold text-dark animate-title">Our Poultry Breeder Management Features</h2>
    <p class="text-muted animate-subtitle" style="background-color:blue">Empowering precision and productivity through technology</p>
  </div>

  <div class="flowchart">

    <div class="flow-step">
      <h5>Breeder Management Systems</h5>
      <p>Monitor bird performance, egg production, fertility rates, and flock health with precision.</p>
    </div>

    <?php foreach ($blocks as $i => $blockText): ?>
      <div class="flow-step">
        <p><?= htmlspecialchars($blockText) ?></p>
      </div>
    <?php endforeach; ?>

    <!-- Static Content -->
    <div class="flow-step">
      <h5>Mobile & Web Platforms</h5>
      <p>Enable farmers, supervisors, and managers to access and update vital farm data from anywhere.</p>
    </div>

    <div class="flow-step">
      <h5>Predictive Analytics</h5>
      <p>Leverage AI to forecast production, detect anomalies, and support better decision-making.</p>
    </div>

    <div class="flow-step">
      <h5>Inventory & Compliance Modules</h5>
      <p>Track feed, medication, vaccinations, and ensure traceable record-keeping for audits and export requirements.</p>
    </div>

  </div>
</div>

<?php include '../php/footer.php'; ?>

<script>
  const slides = document.querySelectorAll('.coverflow label');
  let index = 0;

  function updateClasses() {
    slides.forEach((slide, i) => {
      slide.className = '';
      if (i === index) slide.classList.add('active');
      else if (i === (index - 1 + slides.length) % slides.length) slide.classList.add('left');
      else if (i === (index + 1) % slides.length) slide.classList.add('right');
    });
  }

  updateClasses();
  setInterval(() => {
    index = (index + 1) % slides.length;
    updateClasses();
  }, 2000);

  // Scroll-triggered fade-in animation
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible', 'visible-title');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.3 });

  document.querySelectorAll('.flow-step, .animate-title, .animate-subtitle')
    .forEach(el => observer.observe(el));
</script>

</body>
</html>
