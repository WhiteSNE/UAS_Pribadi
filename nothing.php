<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/global-font.css">
    <title>Title</title>
    <style>
        @keyframes wave {
            0% {
                transform: translateY(0);
            }
            20% {
                transform: translateY(-10px);
            }
            40% {
                transform: translateY(5px);
            }
            60% {
                transform: translateY(-5px);
            }
            80% {
                transform: translateY(3px);
            }
            100% {
                transform: translateY(0);
            }
        }

        .wave-effect {
            display: inline-block;
            font-size: 2rem; /* Adjust as needed */
            color: #007bff; /* Set your desired color */
        }

        .wave-container {
            display: flex;
            flex-wrap: wrap; /* Allow letters to wrap if necessary */
            justify-content: center;
        }

        .wave-container span {
            display: inline-block;
            animation: wave 1.5s ease-in-out infinite;
            animation-delay: calc(0.1s * var(--i)); /* Delay each letter by an increment */
        }

        /* Added layout adjustments to avoid text obstruction */
        .gif-container {
            display: flex;
            justify-content: space-around;
            gap: 20px;
            width: 100%;
            margin-top: 20px; /* Add space between text and GIFs */
        }

        .gif-container > div {
            flex: 1;
            max-width: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <?php include('includes/header.php'); ?>
    <main class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="d-flex flex-column justify-content-center align-items-center" style="width: 100%; max-width: 800px;">
            <!-- Title with Wave Effect for each letter -->
            <h3 class="text-center">
                <span class="wave-container" id="waveTitle"></span>
            </h3>

            <!-- GIF Container with Proper Layout -->
            <div class="gif-container">
                <div>
                    <div class="tenor-gif-embed" data-postid="11228253217918163274" data-share-method="host" data-aspect-ratio="1" data-width="100%">
                        <a href="https://tenor.com/view/seseren-skadi-arknights-gif-11228253217918163274">Seseren Skadi GIF</a> from 
                        <a href="https://tenor.com/search/seseren-gifs">Seseren GIFs</a>
                    </div>
                </div>
                <div>
                    <div class="tenor-gif-embed" data-postid="25646530" data-share-method="host" data-aspect-ratio="1.11111" data-width="100%">
                        <a href="https://tenor.com/view/arknights-kyaa-skadi-gif-25646530">Arknights Kyaa GIF</a> from 
                        <a href="https://tenor.com/search/arknights-gifs">Arknights GIFs</a>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
    </main>
    <?php include('includes/footer.php'); ?>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // JavaScript to split the title into individual letters and apply wave effect
        document.addEventListener('DOMContentLoaded', function() {
            const title = "Congrast Thanks For Your Time Finding This Hole";
            const waveContainer = document.getElementById("waveTitle");

            // Split title into letters and wrap each letter in a <span>
            title.split('').forEach((letter, index) => {
                const span = document.createElement("span");
                span.textContent = letter;
                span.style.setProperty('--i', index);  // Set delay for each letter
                waveContainer.appendChild(span);
            });
        });
    </script>
</body>
</html>
