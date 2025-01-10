<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/global-font.css">
        <title>Title</title>
    </head>

    <body>
        <?php include('includes/header.php'); ?>
        <main>
            <!--Banner-->
            <div class="container-fluid" style="padding: 0; margin: 0; width: 100%;">
                <div class="banner-img" style="position: relative; overflow: hidden; width: 100%; height: 40rem;">
                    <img src="assets/img/car1.jpg" alt="banner-img-main" style="width: 100%; height: 100%; object-fit: cover;">
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; font-size: 2rem; text-align: center; font-family: 'AegirSeaborn', sans-serif;">
                        Welcome to Aegir Underwater City
                    </div>
                </div>
            </div>
            <!--Description-->
            <div class="container-fluid" style="padding-top: 4rem; margin: 0; width: 100%;">
                <h1 class="text-center">What Are We</h1>
                <p class="text-center" style="font-size: 1em; max-width: 800px; margin: 2rem auto; line-height: 1.6;">
                    Welcome to the Aegir Underwater City, a marvel of modern engineering submerged deep beneath the ocean's surface. 
                    This city, built in harmony with the marine world, is a sanctuary for those seeking refuge from the surface world. 
                    Its towering structures are made from durable, sustainable materials that can withstand the immense pressure of the deep ocean. 
                    The city’s glowing lights illuminate the vast ocean floor, creating a vibrant and dynamic atmosphere for its inhabitants. 
                    
                    Beneath the city lies the mysterious abyss, home to the Abyss Dwellers — enigmatic beings that have adapted to the harshest 
                    conditions of the ocean depths. These creatures are the true guardians of the deep, thriving in darkness and pressure 
                    that would crush any surface creature. Over time, they have developed unique bioluminescence and evolved to survive 
                    in environments once thought uninhabitable.
                    
                    The Abyss Dwellers are as mysterious as the depths they inhabit, and their ancient knowledge of the ocean’s deepest 
                    secrets might hold the key to understanding the vast, unexplored realms below.
                </p>
            </div>
<!--Our Agent-->
                <div class="justify-content-center" style="padding-top: 4rem;">
                    <h1 class="text-center">Meet our Angents</h1>
                </div>
            <div class="container-fluid d-flex justify-content-center flex-wrap">
    <div class="card" style="width: 15rem; height: 30rem; margin: 1rem;">
        <img src="assets/img/Ulpianus.webp" alt="Ulpianus" class="card-img-top" style="object-fit: cover; width: 100%; height: 100%;">
        <div class="card-body">
            <h4 class="card-title text-center"> Agent Ulpianus</h4>
        </div>
    </div>
    <div class="card" style="width: 15rem; height: 30rem; margin: 1rem;">
        <img src="assets/img/Gladia.webp" alt="Gladia" class="card-img-top" style="object-fit: cover; width: 100%; height: 100%;">
        <div class="card-body">
            <h4 class="card-title text-center"> Agent Gladia</h4>
        </div>
    </div>
    <div class="card" style="width: 15rem; height: 30rem; margin: 1rem;">
        <img src="assets/img/Skadi.png" alt="Skadi" class="card-img-top" style="object-fit: cover; width: 100%; height: 100%;">
        <div class="card-body">
            <h4 class="card-title text-center"> Agent Skadi</h4>
        </div>
    </div>
    <div class="card" style="width: 15rem; height: 30rem; margin: 1rem;">
        <img src="assets/img/Spectre.webp" alt="Spectre" class="card-img-top" style="object-fit: cover; width: 100%; height: 100%;">
        <div class="card-body">
            <h4 class="card-title text-center"> Agent Spectre</h4>
        </div>
    </div>
        </div>
</main>
        <?php include('includes/footer.php') ?>            
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>