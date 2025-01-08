<?php
session_start();
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('location: index.php');
    exit();
}

if (!isset($_SESSION["username"])) {
    header('location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/style/header.css">
    <link rel="stylesheet" href="asset/style/global.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5/5hb7xvEv+MCeI6UJIFK7/sy6Te/XImsaGoAX1Y" crossorigin="anonymous">
    <title>Isekai</title>
</head>
<body>
<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent position-absolute w-100" style="z-index: 2; top: 0;">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#" style="font-size: 1.5rem; padding-left: 1rem;">Isekai Resident</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-5" style="padding-right: 3rem;">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../AboutUs.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../Product.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../Location.php">Location</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../ContactUs.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <form action="home.php" method="POST" class="d-flex navbar-nav">
                            <button type="submit" name="logout" class="btn btn-danger">Logout</butto>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Background Image with Text -->
    <div class="bg-img" style="position: relative; width: 100%; height: 100vh; overflow: hidden;">
    <img src="asset/img/bg_head.png" alt="Background Image" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: 0;">
    <div class="text-overlay" style="position: absolute; z-index: 1; color: white; top: 50%; left: 10%;">
        <p style="font-size: 1.5rem; margin: 0;">ISEKAI RESIDENCE</p>
        <h1 style="font-size: 2.5rem; font-weight: bold; margin: 0;">Pengalaman Hidup<br>Yang Tenang dan Damai</h1>
    </div>
</div>

</header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoFfS1DhsbEl8s1Ot6VRXCAeDl6UJImQeMpG7ljktBl4J6L" crossorigin="anonymous"></script>
</body>
</html>
