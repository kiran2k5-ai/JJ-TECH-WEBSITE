<?php
$dataFile = '../admin/data.json';
$blocks = [];

if (file_exists($dataFile)) {
    $json = file_get_contents($dataFile);
    $data = json_decode($json, true);
    if (isset($data['pages']['breeder.php']['blocks'])) {
        $blocks = $data['pages']['index.php']['blocks'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="JJ TECH SOLUTIONS - Empowering businesses with modern IT solutions including web development, AI, cloud, and automation.">
  <title>JJ TECH SOLUTIONS</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
    }
    .hero-section,
    .carousel-inner,
    .carousel-item,
    .carousel-item img {
      height: 100vh;
      width: 100%;
      object-fit: cover;
    }
    .parallax-section {
      background-image: url('images/images1.jpeg');
      background-attachment: fixed;
      background-size: cover;
      background-position: center;
      padding: 100px 0;
      color: white;
      text-shadow: 1px 1px 4px rgba(0,0,0,0.8);
    }
    .parallax-section .container {
      background-color: rgba(0, 0, 0, 0.5);
      padding: 40px;
      border-radius: 10px;
    }
    .parallax-section h2 {
      font-weight: 700;
    }
    .mycontainer {
      display: flex;
    }
    .mycontainer > div {
      width: 33%;
    }
    .box {
      padding: 10px;
      margin: 10px;
      border-radius: 5%;
      animation: div-box 2s 1;
    }
    @keyframes div-box {
      0%   {left: 0; top: 0;}
      25%  {left: 200px; top: 0; transform: rotate(20deg);}
      100% {left: 0; top: 0; transform: rotate(0);}
    }
    .card {
      width: 250px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2), 0 6px 20px rgba(0,0,0,0.19);
      text-align: center;
    }
    .expertise-section {
      background-color: #fff;
      padding: 80px 0;
    }
    .expertise-section h2 {
      font-weight: 700;
    }
    .box.card {
      transition: transform 0.3s ease;
      border-radius: 12px;
    }
    .box.card:hover {
      transform: translateY(-5px);
    }
    .clients-section {
      padding: 80px 0;
      font-size: 1.1rem;
      line-height: 1.8;
    }
    .bg-bisque {
      background-color: bisque;
    }
    @media (max-width: 768px) {
      .parallax-section {
        background-attachment: scroll;
      }
      .parallax-section .container {
        padding: 20px;
      }
    }
  </style>
</head>

<body class="d-flex flex-column min-vh-100">

  <nav class="navbar navbar-expand-lg navbar-custom fixed-top shadow bg-white">
    <div class="container">
      <a class="navbar-brand fw-bold" href="index.php">JJ TECH SOLUTIONS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item dropdown custom-dropdown">
            <a class="nav-link" href="products.html" id="productsDropdown">Products</a>
            <div class="dropdown-menu shadow-lg p-4">
              <a class="dropdown-item" href="accounts.html">Accounts</a>
              <a class="dropdown-item" href="#">Integration</a>
              <a class="dropdown-item" href="products/breeder.php">Breeder</a>
              <a class="dropdown-item" href="products/hatchery.php">Hatchery</a>
              <a class="dropdown-item" href="#">Feed Mill</a>
              <a class="dropdown-item" href="#">Processing Unit</a>
              <a class="dropdown-item" href="#">Retail Outlet</a>
              <a class="dropdown-item" href="#">Trading</a>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="client.html">Client</a></li>
          <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="clients-section text-white text-center d-flex align-items-center" style="background-image: url('images/home/images3.jpeg'); background-attachment: fixed; background-size: cover; background-position: center; min-height: 400px;">
    <div class="container py-5 bg-dark bg-opacity-50 rounded">
      <h2>Welcome to JJ Tech Solutions</h2>
      <p>At JJ Tech Solutions, we believe technology is not just a tool — it's a catalyst for transformation...</p>
      <p><strong>Our mission is simple:</strong> Empower. Innovate. Transform.</p>
    </div>
  </section>

  <section class="expertise-section py-5">
    <div class="container">
      <h2 class="text-center fw-bold mb-5">Our Areas of Expertise</h2>
      <div class="row justify-content-center g-4">

        <?php
        $expertise = [
          ["SQL Server", "sql icon.png", "We provide a safe and secure place to retrieve and receive data."],
          ["Web Development", "web development icon.png", "Build fast, secure, and scalable websites tailored to your business needs."],
          ["Cloud Solutions", "cloud icon.png", "Leverage the cloud for flexibility, performance, and lower infrastructure costs."],
          ["AI & Automation", "ai icon.png", "Integrate intelligent systems to streamline and automate your workflows."]
        ];

        foreach ($expertise as $exp) {
          echo '<div class="col-12 col-sm-10 col-md-6 col-lg-4 d-flex justify-content-center">
                  <div class="card p-4 border-0 rounded-4 shadow w-100" style="max-width: 300px;">
                    <div class="mb-3 text-center">
                      <img src="images/icons/' . $exp[1] . '" alt="' . $exp[0] . ' Icon" width="40" loading="lazy">
                    </div>
                    <h4 class="fw-bold text-center">' . $exp[0] . '</h4>
                    <p class="text-center">' . $exp[2] . '</p>
                  </div>
                </div>';
        }
        ?>
      </div>
    </div>
  </section>

  <!-- Clients Section -->
  <section class="clients-section text-white text-center d-flex align-items-center" style="background-image: url('images/home/images5.jpeg'); background-attachment: fixed; background-size: cover; background-position: center; min-height: 400px;">
    <div class="container py-5 bg-dark bg-opacity-50 rounded">
      <h2 class="fw-bold mb-4">Meet Our Clients</h2>
      <p class="lead">We deliver powerful, customized software solutions across industries...</p>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-5 mt-auto shadow">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-lg-6 mb-4">
          <div class="map-responsive shadow-sm rounded">
            <iframe
              src="https://www.google.com/maps/embed?pb=..."
              width="100%" height="200" style="border:0; border-radius: 10px;"
              allowfullscreen loading="lazy"></iframe>
          </div>
        </div>

        <div class="col-lg-6 text-center">
          <div class="mb-3">
            <a href="https://facebook.com" target="_blank" class="me-3"><i class="bi bi-facebook fs-4 text-white"></i></a>
            <a href="https://instagram.com" target="_blank" class="me-3"><i class="bi bi-instagram fs-4 text-white"></i></a>
            <a href="https://youtube.com" target="_blank" class="me-3"><i class="bi bi-youtube fs-4 text-white"></i></a>
            <a href="https://linkedin.com" target="_blank" class="me-3"><i class="bi bi-linkedin fs-4 text-white"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fa-brands fa-x-twitter fs-5 text-white"></i></a>
          </div>
          <p class="mb-0 mt-3">&copy; 2025 <strong>JJ TECH SOLUTIONS</strong>. All rights reserved.</p>
        </div>

      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
$filename = "counter.txt";

if (!file_exists($filename)) {
    file_put_contents($filename, "0");
}

$count = file_get_contents($filename);
$count = intval($count) + 1;
file_put_contents($filename, $count);

echo "Visitors: " . $count;
?>
