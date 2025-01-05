<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/style/header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
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
          <a class="nav-link" href="AboutUs" style="color: white; font-size: 1rem;">About us</a>
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
<main>
<!--Text Main-->
  <div class="d-flex text-start" style="z-index: 1; padding-left: 3rem; padding-top: 5rem;">
  <article style="color:white;">
    <p style="font-size: 1.5rem;">Who we Are</p>
    <h1 style="font-size: 2.5rem; font-weight: bold;">Isekai Residence<br>Living in Your Dream</h1>
    <p style="font-size: 1.5rem;">Sebuah kota impian para wibu dengan hunian berkualitas, damai, dan tenang<br>
    Berlokasi paling strategis di Jepang</p>
  </article>
  </div>
<!--Side Image and Text-->
<div class="d-flex" style="width: 100%; height: 40rem;">
<!--Side Image-->
    <div class="side-bg position-relative" style="width: 60%; height: 100%; overflow: hidden;">
        <div class="side-img" style="width: 100%; height: 100%; position: relative;">
            <img src="asset/img/bg_card.png" alt="side-img" style="width: 100%; height: 100%; object-fit: contain; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
        </div>
    </div>
<!--Side Text-->
    <div class="right-text d-flex flex-column justify-content-center" style="width: 40%; padding: 2rem; color: white;">
        <h1>Suasana yang<br>Tenang</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa cum quod eum. Nam vel molestias libero alias assumenda repellat cum excepturi, quasi inventore adipisci ullam nulla, veniam qui sequi debitis.</p>
    </div>
</div>
<!--title and Card-->
<div class="d-flex flex-column align-items-center" style="width: 100%;">
<!--Title Text-->
    <div class="title-text d-flex flex-column text-center" style="color: white;">
        <h1>Isekai Residence of Japan</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
        Odio accusantium consequuntur vel necessitatibus, deserunt exercitationem fugit maxime dicta doloremque<br>
        dolore neque laboriosam magni perspiciatis tempore nisi minus blanditiis ducimus amet.</p>
    </div>
<!--Card Container-->
<div class="card-contain d-flex flex-column flex-md-row justify-content-between gap-4">
<div class="card" style="width: 18rem; height: 20rem; margin-top: 2rem;">
    <a href="#" style="text-decoration: none; color: inherit; height: 100%; display: block;">
        <img src="asset/img/bg_card-item1.png" class="card-img-top" alt="..." style="width: 100%; height: 100%; object-fit: cover; border-radius: inherit;"></a>
</div>
<div class="card" style="width: 18rem; height: 20rem; margin-top: 2rem;">
    <a href="#" style="text-decoration: none; color: inherit; height: 100%; display: block;">
        <img src="asset/img/bg_card-item2.png" class="card-img-top" alt="..." style="width: 100%; height: 100%; object-fit: cover; border-radius: inherit;"></a>
</div>
<div class="card" style="width: 18rem; height: 20rem; margin-top: 2rem;">
    <a href="#" style="text-decoration: none; color: inherit; height: 100%; display: block;">
        <img src="asset/img/bg_card-item3.png" class="card-img-top" alt="..." style="width: 100%; height: 100%; object-fit: cover; border-radius: inherit;"></a>
</div>
</div>
<!--Profile Card-->
<div style="display: flex; gap: 2rem; justify-content: center; padding-top: 4rem; padding-bottom: 4rem; color: #fff;">
  <!-- Card 1 -->
  <div style="width: 300px; border-radius: 10px; padding: 20px; text-align: center;">
    <div style="width: 80px; height: 80px; background-color: #ccc; border-radius: 50%; margin: 0 auto 20px;"></div>
    <p style="font-size: 14px; line-height: 1.5; margin: 10px 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
    <h4 style="font-size: 18px; margin: 10px 0; font-weight: bold;">Farhan Firmansyah</h4>
    <span style="font-size: 14px; color: #aaa;">Raja iblis</span>
  </div>

  <!-- Card 2 -->
  <div style="width: 300px; border-radius: 10px; padding: 20px; text-align: center;">
    <div style="width: 80px; height: 80px; background-color: #ccc; border-radius: 50%; margin: 0 auto 20px;"></div>
    <p style="font-size: 14px; line-height: 1.5; margin: 10px 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
    <h4 style="font-size: 18px; margin: 10px 0; font-weight: bold;">Krisna Satya A.</h4>
    <span style="font-size: 14px; color: #aaa;">Komandan Iblis 1</span>
  </div>

  <!-- Card 3 -->
  <div style="width: 300px; border-radius: 10px; padding: 20px; text-align: center;">
    <div style="width: 80px; height: 80px; background-color: #ccc; border-radius: 50%; margin: 0 auto 20px;"></div>
    <p style="font-size: 14px; line-height: 1.5; margin: 10px 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
    <h4 style="font-size: 18px; margin: 10px 0; font-weight: bold;">M. Hernanda Fikri W.</h4>
    <span style="font-size: 14px; color: #aaa;">Komandan Iblis 2</span>
  </div>

  <!-- Card 4 -->
  <div style="width: 300px; border-radius: 10px; padding: 20px; text-align: center;">
    <div style="width: 80px; height: 80px; background-color: #ccc; border-radius: 50%; margin: 0 auto 20px;"></div>
    <p style="font-size: 14px; line-height: 1.5; margin: 10px 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
    <h4 style="font-size: 18px; margin: 10px 0; font-weight: bold;">Nanda Muhammad F.</h4>
    <span style="font-size: 14px; color: #aaa;">Komandan Iblis 3</span>
  </div>
</div>
</div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
