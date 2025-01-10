<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/global-font.css">
        <link rel="stylesheet" href="assets/css/about-theme.css">
        <title>Title</title>
    </head>

    <body>
        <?php include('includes/header.php'); ?>
        <main>
            <!--Description-->
            <div class="container-fluid" style="padding-top: 4rem; margin: 0; width: 100%;">
                <h1 class="text-center" style="text-decoration:underline;">About Us</h1>
                <p class="text-center" style="font-size: 1em; max-width: 800px; margin: 2rem auto; line-height: 1.6;">
                    Welcome to the Aegir Underwater City, a marvel of modern engineering submerged deep beneath the ocean's surface. 
                    This city, built in harmony with the marine world, is a sanctuary for those seeking refuge from the surface world. 
                    Its towering structures are made from durable, sustainable materials that can withstand the immense pressure of the deep ocean. 
                    The city’s glowing lights illuminate the vast ocean floor, creating a vibrant and dynamic atmosphere for its inhabitants. 
                </p>
            </div>
<!--Carousel title-->
        <div class="container-fluid" style="padding-top: 4rem; text-decoration:underline;">
            <h1 class="text-center">Our City Scenery</h1>
        </div>
<!--Carousel-->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/Background-Aegir_Streets_1.webp" class="d-block w-75 mx-auto" alt="..." style="max-height: 40rem; object-fit: cover;">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/Background-Aegir_Streets_2.webp" class="d-block w-75 mx-auto" alt="..." style="max-height: 40rem; object-fit: cover;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/Background-Aegir_Port.webp" class="d-block w-75 mx-auto" alt="..." style="max-height: 40rem; object-fit: cover;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

        </main>
        <?php include('includes/footer.php') ?>            
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
