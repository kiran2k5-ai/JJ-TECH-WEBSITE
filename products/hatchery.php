<? include '../php/header.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hatchery</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/products/hatchery.css">
</head>
<body>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/hatchery/hatcher-images1.jpg" class=" w-100" alt="...">
    </div>
    <div class="carousel-item active">
      <img src="../images/hatchery/hatcher-images2.jpg" class="w-100" alt="...">
    </div>
    <div class="carousel-item active">
      <img src="../images/hatchery/hatcher-images3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item active">
      <img src="../images/hatchery/hatcher-images4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item active">
      <img src="../images/hatchery/hatcher-images2.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<br>

<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="../images/hatchery/hatcher-images1.jpg" class="d-block" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="../images/hatchery/hatcher-images1.jpg" class="d-block" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/hatchery/hatcher-images1.jpg" class="d-block" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</body>
</html>
<? include '../php/footer.php' ?>