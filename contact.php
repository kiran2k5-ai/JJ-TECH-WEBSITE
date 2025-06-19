<?php
$dataFile = '../admin/data.json';
$blocks = [];

if (file_exists($dataFile)) {
    $json = file_get_contents($dataFile);
    $data = json_decode($json, true);

    // Correct reference to contact.php blocks
    if (isset($data['pages']['contact.php']['blocks'])) {
        $blocks = $data['pages']['contact.php']['blocks'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>JJ TECH SOLUTIONS</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/contact.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">

<?php include 'php/header.php'; ?>

<div class="contact-section position-relative">
  <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>

  <div class="container position-relative">
    <div class="row align-items-start">
      <div class="col-md-6 mb-4" data-aos="fade-right">
        <h1 class="fw-bold">Contact Us</h1>
        <p>We are happy to help. Here are some ways to contact us.</p>

        <h3><strong>Address</strong></h3>
        <?php if (!empty($blocks)): ?>
          <?php foreach ($blocks as $blockText): ?>
            <p><?= htmlspecialchars($blockText) ?></p>
          <?php endforeach; ?>
        <?php else: ?>
          <p class="text-danger">Address details not available.</p>
        <?php endif; ?>

        <br>
        <strong>Office Cell:</strong> 9345227359<br>
        <strong>Email:</strong> jjtech_madurai@yahoo.in
      </div>

      <div class="col-md-6" data-aos="fade-left">
        <h1 class="fw-bold">Enquiry</h1>
        <form action="#" method="post" class="form-custom">
          <div class="mb-3">
            <label for="email">Email *</label>
            <input type="email" id="email" name="email" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="4" class="form-control" required></textarea>
          </div>

          <button type="submit" class="btn-submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

<footer class="bg-dark text-white text-center py-5 mt-auto shadow">
  <div class="container">
    <h5 class="mb-4 animate-fade-in">Find Us on Google Maps</h5>
    <div class="map-responsive mx-auto mb-4 animate-zoom-in">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3913.998332214249!2d78.1016549!3d9.8969135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00cf8e6182605d%3A0x269dc0a334f1782c!2s25%2C%20Kovalan%20Nagar%207th%20St%2C%20Kovalan%20Nagar%2C%20Madurai%2C%20Tamil%20Nadu%20625003!5e0!3m2!1sen!2sin!4v1718561212345!5m2!1sen!2sin"
        width="100%" height="250"
        style="border:0; border-radius: 10px;"
        allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>

    <div class="mb-3 animate-fade-in">
      <a href="https://facebook.com" target="_blank" class="me-3 text-white"><i class="bi bi-facebook fs-4"></i></a>
      <a href="https://instagram.com" target="_blank" class="me-3 text-white"><i class="bi bi-instagram fs-4"></i></a>
      <a href="https://youtube.com" target="_blank" class="me-3 text-white"><i class="bi bi-youtube fs-4"></i></a>
      <a href="https://linkedin.com" target="_blank" class="me-3 text-white"><i class="bi bi-linkedin fs-4"></i></a>
      <a href="https://twitter.com" target="_blank" class="text-white"><i class="fa-brands fa-x-twitter fs-5"></i></a>
    </div>
    <p class="mb-0 animate-fade-in">&copy; 2025 JJ TECH SOLUTIONS. All rights reserved.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>AOS.init();</script>
</body>
</html>
