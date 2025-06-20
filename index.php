<?php
$dataFile = __DIR__ . '/admin/data.json';
$data = json_decode(file_get_contents($dataFile), true);

$blocks = $data['pages']['index.php']['blocks'] ?? [];
?>
<?php
$filename = "counter.txt";

if (!file_exists($filename)) {
    file_put_contents($filename, "0");
}

$count = file_get_contents($filename);
$count = intval($count) + 1;
file_put_contents($filename, $count);

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
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">

  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
    }
      .navbar-custom {
      background-color: #fff !important;
      border-bottom: 1px solid #ddd;
      font-weight: 500;
    }

    .navbar-custom .nav-link, .navbar-custom .navbar-brand {
      color: #000 !important;
    }
    .custom-dropdown:hover .dropdown-menu {
  display: block;
  margin-top: 10px; /* space below the link */
  border-top: 4px solid #0d6efd; /* Bootstrap primary blue */
  animation: fadeIn 0.2s ease-in-out;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(-10px); }
  to { opacity: 1; transform: translateY(0); }
}

/* Prevent hiding when hovered */
.nav-item.dropdown:hover .dropdown-menu {
  display: block;
}

.custom-dropdown:hover .dropdown-menu {
  display: block;
  margin-top: 10px;
  border-top: 4px solid #0d6efd;
  animation: fadeIn 0.2s ease-in-out;
}

/* Enlarge the dropdown box */
.custom-big-dropdown {
  width: 500px;
  max-width: 90vw;
  min-height: 250px;
  border-radius: 10px;
}


/* Optional animation */
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(-10px); }
  to { opacity: 1; transform: translateY(0); }
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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/php/header.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-custom fixed-top shadow bg-white">
  <div class="container">
    <a class="navbar-brand fw-bold" href="../index.php">JJ TECH SOLUTIONS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
        <li class="nav-item dropdown custom-dropdown">
          <a class="nav-link" href="products.html">Products</a>
          <div class="dropdown-menu shadow-lg p-4">
            <a class="dropdown-item" href="accounts.html">Accounts</a>
            <a class="dropdown-item" href="#">Integration</a>
            <a class="dropdown-item" href="../products/breeder.php">Breeder</a>
            <a class="dropdown-item" href="../products/hatchery.php">Hatchery</a>
            <a class="dropdown-item" href="#">Feed Mill</a>
            <a class="dropdown-item" href="#">Processing Unit</a>
            <a class="dropdown-item" href="#">Retail Outlet</a>
            <a class="dropdown-item" href="#">Trading</a>
          </div>
        </li>
        <li class="nav-item"><a class="nav-link" href="client.php">Client</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const dropdown = document.querySelector(".custom-dropdown");

    dropdown.addEventListener("mouseenter", function () {
      this.classList.add("show");
      const menu = this.querySelector(".dropdown-menu");
      menu.classList.add("show");
      menu.style.marginTop = "10px";
      menu.style.borderTop = "4px solid #0d6efd";
    });

    dropdown.addEventListener("mouseleave", function () {
      this.classList.remove("show");
      const menu = this.querySelector(".dropdown-menu");
      menu.classList.remove("show");
    });
  });
</script>

</body>
</html>

  <section class="clients-section text-white text-center d-flex align-items-center" style="background-image: url('images/home/images3.jpeg'); background-attachment: fixed; background-size: cover; background-position: center; min-height: 400px;">
    <div class="container py-5 bg-dark bg-opacity-50 rounded">
      <h2>Welcome to JJ Tech Solutions</h2>
      <p>At JJ Tech Solutions, we believe technology is not just a tool — it's a catalyst for transformation...</p>
      <p><strong>Our mission is simple:</strong> Empower. Innovate. Transform.</p>
      <div class="w3-container">
        <h2>Badges</h2>
        <p>The w3-badge class creates a circular badge. Badges are black by default.</p>
        <p>Visitor Count <span class="w3-badge w3-xlarge w3-padding w3-black"><?php echo $count?></span></p>
      </div>
    </div>
  </section>

  <section class="expertise-section py-5">
    <div class="container">
      <h2 class="text-center fw-bold mb-5">Our Areas of Expertise</h2>
      <div class="row justify-content-center g-4">

        <div class="container my-5">

  <div class="row">
    <?php
    foreach ($blocks as $block) {
        if (is_array($block) && isset($block['type']) && $block['type'] === 'expertise') {
            foreach ($block['data'] as $item) {
                echo '<div class="col-md-6 col-lg-3">';
                echo '  <div class="expertise-card">';
                echo '    <img src="images/icons/' . htmlspecialchars($item['icon']) . '" class="expertise-icon" alt="' . htmlspecialchars($item['title']) . '">';
                echo '    <h5 class="fw-semibold">' . htmlspecialchars($item['title']) . '</h5>';
                echo '    <p class="text-muted">' . htmlspecialchars($item['description']) . '</p>';
                echo '  </div>';
                echo '</div>';
            }
        } elseif (is_string($block)) {
            echo '<div class="col-12 mb-3"><p>' . htmlspecialchars($block) . '</p></div>';
        }
    }
    ?>
  </div>
</div>
      </div>
    </div>
  </section>

  <section class="clients-section text-white text-center d-flex align-items-center" style="background-image: url('images/home/images5.jpeg'); background-attachment: fixed; background-size: cover; background-position: center; min-height: 400px;">
    <div class="container py-5 bg-dark bg-opacity-50 rounded">
      <h2 class="fw-bold mb-4">Meet Our Clients</h2>
      <p class="lead">We deliver powerful, customized software solutions across industries...</p>
    </div>
  </section>
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

