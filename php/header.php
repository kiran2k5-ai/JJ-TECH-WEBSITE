<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/header.css">
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
            <a class="dropdown-item" href="#">Hatchery</a>
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