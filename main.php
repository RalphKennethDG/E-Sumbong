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
            <img src="ESUMBONG.png" alt="Logo" class="logo">
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
            <img src="aboutus.jpeg">
            <div class="card__content">
                <p class="card__title">About Us</p>
                <p class="card__description">Discover the essence of our mission, values, and commitment to
                    serving the community. Learn about our journey, team, and vision for a better tomorrow.</p>
                <div>
                    <button class="card__button">Button 1</button>
                </div>
            </div>
        </div>
        <div class="card2">
            <img src="report.jpeg">
            <div class="card2__content">
                <p class="card2__title">REPORT</p>
                <p class="card2__description">E-Sumbong Report: Your comprehensive overview of submitted complaints,
                    providing insights into trends, resolution statuses, and actionable data for effective governance
                    and community engagement.</p>
                <div>
                    <button class="card2__button">Button 2</button>
                </div>
            </div>
        </div>
        <div class="card3">
            <img src="faq.jpeg">
            <div class="card3__content">
                <p class="card3__title">FAQ</p>
                <p class="card3__description">Find answers to commonly asked questions about our services, policies, and
                    more. Explore our FAQ section to get quick insights and solutions to your queries.</p>
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