<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

    <title>Dashboard</title>
</head>

<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="dashboard-assets/userphoto.jpeg" alt="">
            </div>
            <span class="logo_name"><a href="#">@Username</a></span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="dashboard.php">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Dashboard</span>
                    </a></li>
                <li><a href="aboutUs.php">
                        <i class="uil uil-files-landscapes"></i>
                        <span class="link-name">About</span>
                    </a></li>
                <li><a href="help.php">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Services</span>
                    </a></li>
                <li><a href="help.php">
                        <i class="uil uil-thumbs-up"></i>
                        <span class="link-name">Contact</span>
                    </a></li>
            </ul>

            <ul class="logout-mode">
                <li><a href="#">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Logout</span>
                    </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                        <span class="link-name">Dark Mode</span>
                    </a>

                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>

            <!--<img src="images/profile.jpg" alt="">-->
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box2">
                        <i class="uil uil-file"></i>
                        <span class="text">Total Reported</span>
                        <span class="number" id="totalReported">Calculating...</span>
                    </div>
                </div>

                <!-- Display reports as a table -->
                <div class="activity">
                    <div class="title">
                        <i class="uil uil-clock-three"></i>
                        <span class="text">Your Feed</span>
                    </div>

                    <div class="feeds">
                        <div class="feed">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Address</th>
                                        <th>Name of Report</th>
                                        <th>Image</th>
                                        <th>Agency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Assuming you have a database connection established
                                    include_once "connection.php"; // Include your database connection file
                                    
                                    // Query to fetch reports
                                    $query = "SELECT * FROM testing ORDER BY date DESC"; // Assuming 'date' is the timestamp of report creation
                                    
                                    // Execute query
                                    $result = mysqli_query($connection, $query);

                                    // Check if there are reports
                                    if (mysqli_num_rows($result) > 0) {
                                        // Loop through each report and display as table rows
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo "<td>" . $row['date'] . "</td>";
                                            echo "<td>" . $row['address'] . "</td>";
                                            echo "<td>" . $row['name_report'] . "</td>";
                                            echo "<td><img src='dashboard-assets/" . $row['image_report'] . "' alt=''></td>";
                                            echo "<td>" . $row['agency'] . "</td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        // No reports found
                                        echo "<tr><td colspan='5'>No reports found.</td></tr>";
                                    }

                                    // Close database connection
                                    mysqli_close($connection);
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <script src="dashboard.js"></script>
</body>

</html>
