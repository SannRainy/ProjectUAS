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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
    <title>My Website</title>
    <style>
        /* Responsiveness for Navbar */
        @media (max-width: 768px) {
            .navbar {
                position: fixed;
                width: 100%;
                top: 0;
                background-color: rgba(0, 0, 0, 0.8);
            }

            .navbar-toggler {
                margin-right: 1rem;
            }

            .navbar-collapse {
                background-color: rgba(0, 0, 0, 0.8);
            }

            .navbar-nav {
                flex-direction: column;
                align-items: flex-start;
                padding-left: 1rem;
            }

            .navbar-nav .nav-item {
                width: 100%;
            }

            .text-overlay {
                padding-left: 2rem;
                padding-top: 10rem;
                text-align: center;
            }

            .text-overlay p {
                font-size: 1.2rem;
            }

            .text-overlay h1 {
                font-size: 2rem;
            }
        }

        @media (min-width: 769px) {
            .navbar-collapse {
                justify-content: flex-end;
            }

            .text-overlay {
                padding-left: 8rem;
                padding-top: 20rem;
            }
        }

        /* Adjust background image height on smaller screens */
        .bg-img {
            position: relative;
            width: 100%;
            height: 40rem;
            overflow: hidden;
        }

        @media (max-width: 768px) {
            .bg-img {
                height: 20rem;
            }
        }
    </style>
</head>
<body style="background-color: #3d4855;">
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
                </ul>
            </div>
            <form action="home.php" method="POST" class="d-flex navbar-nav">
                <button type="submit" name="logout" class="btn btn-danger">Logout</button>
            </form>
        </div>
    </nav>

    <!-- Background Image with Text -->
    <div class="bg-img">
        <img src="asset/img/bg_head.png" alt="Background Image" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; z-index: 0;">
        <div class="text-overlay text-start d-flex flex-column justify-content-center align-items-start" style="position: relative; z-index: 1; color: white;">
            <p style="font-size: 1.5rem;">Isekai Residence</p>
            <h1 style="font-size: 2.5rem; font-weight: bold;">Pengalaman Hidup<br>Yang Tenang dan Damai</h1>
        </div>
    </div>
</header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
