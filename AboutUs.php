<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/style/header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
    <title>About Us</title>
</head>
<body>
<div class="container container-fluid d-flex">
<!--Title Text-->
    <div class="col align-self-center container-fluid">
        <div class="text-center" style="color: white; padding-top: 4rem;">
            <p style="font-size: 2.5rem; font-weight: bold;">"Living in Your Dream"</p>
        </div>
    </div>
    <div class="container-fluid d-flex" style="padding-top: 3rem;">
<!--Side Title & Desc Text-->
<div style="display: flex; align-items: center; justify-content: center; color: white; padding: 2rem; border-radius: 0.5rem; width: 100%; max-width: 50rem; margin: 0 auto; flex-wrap: wrap; text-align: center;">
    <div style="flex: 1; width: 100%; max-width: 100%;">
        <h1 style="margin: 0; font-size: 2rem; line-height: 1.5;">Konsep<br>Isekai<br>Residence</h1>
    </div>
    <div style="flex: 2; width: 100%; max-width: 100%; margin-top: 1rem;">
        <p style="margin: 0; line-height: 1.5; font-size: 1rem;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eros eu elementum nulla himenaeos sagittis accumsan nec. Vulputate commodo dis inceptos netus, inceptos enim. Lorem dapibus et curae ridiculus arcu conubia pharetra dapibus magnis. Cras ultrices ipsum dignissim commodo quis malesuada tempor. Conubia quis blandit lacus laoreet malesuada leo parturient metus sollicitudin. Finibus id dolor tortor vehicula habitant lobortis cursus. Dapibus eleifend bibendum fames tempus scelerisque nisi commodo. Phasellus faucibus vivamus sed adipiscing finibus iaculis sem. Praesent sapien quis id litora, mi morbi varius.
        </p>
    </div>
</div>


<!--Profile Card-->
<section class="profile-cards container" style="padding: 4rem 0; color: #fff;">
    <div class="row justify-content-center d-none d-md-flex"> <!-- Grid Layout for Desktop -->
        <?php 
        $profiles = [
            ["name" => "Farhan Firmansyah", "title" => "Raja Iblis"],
            ["name" => "Krisna Satya A.", "title" => "Komandan Iblis 1"],
            ["name" => "M. Hernanda Fikri W.", "title" => "Komandan Iblis 2"],
            ["name" => "Nanda Muhammad F.", "title" => "Komandan Iblis 3"]
        ];
        foreach ($profiles as $profile): ?>
            <div class="col-12 col-md-6 col-lg-3 mb-4"> <!-- Responsive column -->
                <div class="card-item" style="border-radius: 10px; padding: 20px; text-align: center; background-color: rgba(255, 255, 255, 0.1);"> <!-- Optional background color -->
                    <div style="width: 80px; height: 80px; background-color: #ccc; border-radius: 50%; margin: 0 auto 20px;"></div>
                    <p style="font-size: 14px; line-height: 1.5; margin: 10px 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <h4 style="font-size: 18px; margin: 10px 0; font-weight: bold;"><?php echo $profile['name']; ?></h4>
                    <span style="font-size: 14px; color: #aaa;"><?php echo $profile['title']; ?></span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Carousel for Mobile -->
    <div id="profileCarousel" class="carousel slide d-md-none" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php 
            foreach ($profiles as $index => $profile): ?>
                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                    <div class="card-item" style="border-radius: 10px; padding: 20px; text-align: center; background-color: rgba(255, 255, 255, 0.1); margin: auto; width: 90%;"> <!-- Optional background color -->
                        <div style="width: 80px; height: 80px; background-color: #ccc; border-radius: 50%; margin: 0 auto 20px;"></div>
                        <p style="font-size: 14px; line-height: 1.5; margin: 10px 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <h4 style="font-size: 18px; margin: 10px 0; font-weight: bold;"><?php echo $profile['name']; ?></h4>
                        <span style="font-size: 14px; color: #aaa;"><?php echo $profile['title']; ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#profileCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#profileCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
    </div>
</div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php include 'includes/footer.php'; ?>
</body>
</html>