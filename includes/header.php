<?php
session_start();
if(isset($_POST['logout'])){
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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll/dist/locomotive-scroll.min.css">
    <script src="asset/script/header.js"></script>
    <title>My Website</title>
</head>
<body style=" background-color: #3d4855;">
    <header>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg position-absolute w-100" style="z-index: 2; top: 0; background: transparent;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="font-size: 1.5rem; color: white; padding-left: 1rem;">Isekai Resident</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
      <ul class="navbar-nav gap-5" style="padding-right: 3rem;">
        <li class="nav-item">
          <a class="nav-link" href="home.php" style="color: white; font-size: 1rem;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="AboutUs.php" style="color: white; font-size: 1rem;">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Product.php" style="color: white; font-size: 1rem;">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Location.php" style="color: white; font-size: 1rem;">Location</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ContactUs.php" style="color: white; font-size: 1rem;">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="Button-logout">
         <form action="home.php" method="POST">
            <button type="submit" name="logout">logout</button>
         </form>
         </div>
</nav>

<!-- Background Image with Text -->
<div class="bg-img position-relative" style="width: 100%; height: 40rem; overflow: hidden;">
  <!-- Background Image -->
  <img src="asset/img/bg_head.png" alt="bg_top" style="z-index: 0; width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;">
  <!-- Text Overlay -->
  <div class="text-overlay text-start d-flex flex-column justify-content-center align-items-start" style="z-index: 1; width: 100%; height: 100%; position: absolute; top: 0; left: 0; padding-left: 8rem; color: white;">
    <p style="font-size:1.5rem;">Isekai Residence</p>
    <h1 style="font-size: 2.5rem; font-weight: bold;">Pengalaman Hidup<br>Yang Tenang dan Damai</h1>
  </div>
</div>
</header>

<script src="https://cdn.jsdelivr.net/npm/locomotive-scroll/dist/locomotive-scroll.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
