<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOncern</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="main-styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="favicon.png">

</head>

<body>
    <header class="header-1">
        <div class="headerlogo">
            <img src="header-title.png" alt="Logo" class="logo">
        </div>
        <nav class="navbar">
            <div class="burger-menu" id="burger-menu">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>

            <div class="navbar-buttons" id="navbar-buttons">
                <button>Home</button>
                <button>About</button>
                <button>Services</button>
                <button>Contact</button>
            </div>
        </nav>
    </header>

    <div class="loading-screen" id="loader">
        <div class="loader">
            <span class="item"></span>
            <span class="item"></span>
            <span class="item"></span>
            <span class="item"></span>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <img src="test.jpeg">
            <div class="card__content">
                <p class="card__title">Card Title</p>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco.</p>
                <div>
                    <button class="card__button">Button 1</button>
                </div>
            </div>
        </div>
        <div class="card2">
            <img src="test2.jpeg">
            <div class="card2__content">
                <p class="card2__title">Card Title</p>
                <p class="card2__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco.</p>
                <div>
                    <button class="card2__button">Button 2</button>
                </div>
            </div>
        </div>
        <div class="card3">
            <img src="test3.jpeg">
            <div class="card3__content">
                <p class="card3__title">Card Title</p>
                <p class="card3__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco.</p>
                <div>
                    <button class="card3__button">Button 3</button>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer">
        <div class="footer__content">
            <h1 class="footer__heading-primary">Empower Voices, Ensure Justice</h1>
            <h2 class="footer__heading-secondary">E-Sumbong, Your Platform for Accountability</h2>
        </div>
    </footer>



    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a560976b07.js" crossorigin="anonymous"></script>
    <script>
        window.addEventListener('load', function () {
            setTimeout(function () {
                var loadingScreen = document.getElementById('loader');
                loadingScreen.classList.add('fade-out'); // Apply fade-out animation
                setTimeout(function () {
                    loadingScreen.classList.add('hidden'); // Hide the loading screen after animation
                }, 200);
            }, 2000);
        });

        document.getElementById("burger-menu").addEventListener("click", function () {
            this.classList.toggle("active"); // Toggle active class on burger menu icon
            document.querySelector(".navbar-buttons").classList.toggle("active"); // Toggle active class on navbar buttons
            document.querySelector(".container").classList.toggle("pushed-down"); // Toggle pushed-down class on container
        });
    </script>


</body>

</html>