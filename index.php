<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/global-font.css">
    <link rel="stylesheet" href="assets/css/theme.css">
    <title>Title</title>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>
    <?php include('includes/header.php'); ?>
    <main>
        <!-- Banner -->
<div class="container-fluid" style="padding: 0; margin: 0; width: 100%;">
    <div class="banner-img" style="position: relative; overflow: hidden; width: 100%; height: 40rem;">
        <img src="assets/img/car1.jpg" alt="banner-img-main" style="width: 100%; height: 100%; object-fit: cover;">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; font-size: 2rem; text-align: center; font-family: 'AegirSeaborn', sans-serif;">
            <p class="text-center">Welcome to Aegir Underwater City</p>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#preRegModal">Pre-Register Now</button>
        </div>
    </div>
</div>

<!-- Modal for Pre-Registration -->
<div class="modal fade" id="preRegModal" tabindex="-1" aria-labelledby="preRegModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="preRegModalLabel">Pre-Register</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="preRegForm" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <div id="message" style="margin-top: 10px;"></div>
            </div>
        </div>
    </div>
</div>
        <!-- Description -->
        <div class="container-fluid" style="padding-top: 4rem; margin: 0; width: 100%;">
            <h1 class="text-center" style="text-decoration:underline;">What Are We</h1>
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

        <!-- Our Agents -->
        <div id="agentSection" class="justify-content-center" style="padding-top: 4rem;">
            <h1 class="text-center" style="text-decoration:underline;">Meet our Agents</h1>
        </div>
        <div class="container-fluid d-flex justify-content-center flex-wrap">
            <!-- Agent Ulpianus -->
            <div class="card" style="width: 15rem; height: 30rem; margin: 1rem;" data-bs-toggle="modal" data-bs-target="#ulpianusModal">
                <img src="assets/img/Ulpianus.webp" alt="Ulpianus" class="card-img-top" style="object-fit: cover; width: 100%; height: 100%;">
                <div class="card-body">
                    <h4 class="card-title text-center">Agent Ulpianus</h4>
                </div>
            </div>

            <!-- Agent Gladia -->
            <div class="card" style="width: 15rem; height: 30rem; margin: 1rem;" data-bs-toggle="modal" data-bs-target="#gladiaModal">
                <img src="assets/img/Gladia.webp" alt="Gladia" class="card-img-top" style="object-fit: cover; width: 100%; height: 100%;">
                <div class="card-body">
                    <h4 class="card-title text-center">Agent Gladia</h4>
                </div>
            </div>

            <!-- Agent Skadi -->
            <div class="card" style="width: 15rem; height: 30rem; margin: 1rem;" data-bs-toggle="modal" data-bs-target="#skadiModal">
                <img src="assets/img/Skadi.png" alt="Skadi" class="card-img-top" style="object-fit: cover; width: 100%; height: 100%;">
                <div class="card-body">
                    <h4 class="card-title text-center">Agent Skadi</h4>
                </div>
            </div>

            <!-- Agent Spectre -->
            <div class="card" style="width: 15rem; height: 30rem; margin: 1rem;" data-bs-toggle="modal" data-bs-target="#spectreModal">
                <img src="assets/img/Spectre.webp" alt="Spectre" class="card-img-top" style="object-fit: cover; width: 100%; height: 100%;">
                <div class="card-body">
                    <h4 class="card-title text-center">Agent Spectre</h4>
                </div>
            </div>
        </div>

        <!-- Modals for each agent -->
        <!-- Ulpianus Modal -->
        <div class="modal fade" id="ulpianusModal" tabindex="-1" aria-labelledby="ulpianusModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ulpianusModalLabel">Agent Ulpianus - CV</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex">
                        <img src="assets/img/Ulpianus.webp" alt="Ulpianus" class="img-fluid me-3" style="width: 40%; max-height: 300px; object-fit: cover;">
                        <div>
                            <p>Agent Ulpianus is a seasoned underwater explorer with expertise in deep-sea navigation and marine life studies. He has led numerous missions to uncharted territories beneath the ocean, uncovering hidden wonders and ancient secrets.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gladia Modal -->
        <div class="modal fade" id="gladiaModal" tabindex="-1" aria-labelledby="gladiaModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="gladiaModalLabel">Agent Gladia - CV</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex">
                        <img src="assets/img/Gladia.webp" alt="Gladia" class="img-fluid me-3" style="width: 40%; max-height: 300px; object-fit: cover;">
                        <div>
                            <p>Agent Gladia is a skilled strategist and combat expert, trained in advanced underwater combat techniques. Her tactical acumen has been crucial in safeguarding the underwater city from various threats.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Skadi Modal -->
        <div class="modal fade" id="skadiModal" tabindex="-1" aria-labelledby="skadiModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="skadiModalLabel">Agent Skadi - CV</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex">
                        <img src="assets/img/Skadi.png" alt="Skadi" class="img-fluid me-3" style="width: 40%; max-height: 300px; object-fit: cover;">
                        <div>
                            <p>Agent Skadi is a marine biologist and environmentalist, dedicated to preserving the delicate ecosystem of the underwater city. Her research has been instrumental in developing sustainable living practices beneath the sea.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Spectre Modal -->
        <div class="modal fade" id="spectreModal" tabindex="-1" aria-labelledby="spectreModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="spectreModalLabel">Agent Spectre - CV</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex">
                        <img src="assets/img/Spectre.webp" alt="Spectre" class="img-fluid me-3" style="width: 40%; max-height: 300px; object-fit: cover;">
                        <div>
                            <p>Agent Spectre is an expert in stealth operations and intelligence gathering. Her ability to move unnoticed through the underwater city's vast networks has been invaluable in securing vital information.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include('includes/footer.php') ?>            
    
    <!-- Bootstrap JavaScript Libraries -->
    <script src="assets/js/regist.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
