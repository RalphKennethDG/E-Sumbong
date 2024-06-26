<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Sumbong</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="reportstyle.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
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


    <div>
        <form id="report-form" data-report-type="">
            <h2>REPORT</h2>
            <div class ="input">
                <textarea name="report" id="report" rows="5" placeholder="Enter your detailed report"></textarea>
            </div>

            <p>Select Agency</p>
            <select name="company" id="company">
                <option value="company1">Department of Environment and Natural Resources (DENR)</option>
                <option value="company2">Department of the Interior and Local Government (DILG)</option>
                <option value="company3">Environmental Management Bureau (EMB)</option>
                <option value="company4">Department of Public Works and Highways (DPWH)</option>
                <option value="company5">Meralco</option>
                <option value="company6">Manila Water Company, Inc.</option>
            </select>

            <div class="image-upload-container" id="image-upload-container">
                <label for="image-upload" class="image-upload-label">
                    <i class="fas fa-cloud-upload-alt"></i>
                    <span>Click to Choose or Drag & Drop Image</span>
                </label>
                <input type="file" accept="image/*" capture="camera" name="image" id="image-upload" class="image-upload-input">

                <div id="image-preview-container" class="image-preview-container">
                    <img id="image-preview" src="#" alt="Image Preview">
                </div>
                <label id="file-name-label" class="file-name-label"></label>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
    



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

        function previewImage(input) {
            var preview = document.getElementById('image-preview');
            var file = input.files[0];
            var reader = new FileReader();

            reader.onload = function () {
                preview.src = reader.result;
                document.getElementById('image-preview-container').style.display = 'block';
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        }

        // Update file name label when a file is selected
        document.getElementById('image-upload').addEventListener('change', function () {
            var fileName = this.files[0].name;
            document.getElementById('file-name-label').innerText = fileName;
            previewImage(this);
        });

        // Update file name label when a file is dropped
        dropzone.ondrop = function(e) {
            e.preventDefault();
            this.className = '';
            var file = e.dataTransfer.files[0];
            document.getElementById('image-upload').files = e.dataTransfer.files;
            document.getElementById('file-name-label').innerText = file.name;
            previewImage(document.getElementById('image-upload'));
        };
    </script>
</body>
</html>

