<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/style/global.css">
    <link rel="stylesheet" href="asset/style/home.css">
    <script src="asset/script/home.js" defer></script>
    <title>Home</title>
</head>
<body>
<main>
    <!-- Who We Are Section -->
    <section class="who-we-are d-flex text-start" style="z-index: 1; padding-left: 3rem; padding-top: 5rem;">
        <article style="color:white;">
            <p style="font-size: 1.5rem;">Who we Are</p>
            <h1 style="font-size: 2.5rem; font-weight: bold;">Isekai Residence<br>Living in Your Dream</h1>
            <p style="font-size: 1.5rem;">Sebuah kota impian para wibu dengan hunian berkualitas, damai, dan tenang<br>
            Berlokasi paling strategis di Jepang</p>
        </article>
    </section>

    <!-- Side Image and Text Section -->
    <section class="side-image-text d-flex fade-in-up" style="width: 100%; height: auto;">
    <div class="side-bg">
        <img src="asset/img/bg_card.png" alt="Side Image">
    </div>
    <div class="right-text">
        <h1>Suasana yang<br>Tenang</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa cum quod eum. Nam vel molestias libero alias assumenda repellat cum excepturi, quasi inventore adipisci ullam nulla, veniam qui sequi debitis.</p>
    </div>
</section>


    <!-- Title and Card Section -->
    <section class="title-and-cards d-flex flex-column align-items-center">
        <div class="title-text d-flex flex-column text-center" style="color: white;">
            <h1>Isekai Residence of Japan</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
            Odio accusantium consequuntur vel necessitatibus, deserunt exercitationem fugit maxime dicta doloremque<br>
            dolore neque laboriosam magni perspiciatis tempore nisi minus blanditiis ducimus amet.</p>
        </div>
        <div class="card-contain d-flex flex-column flex-md-row justify-content-between gap-4">
            <?php 
            $cardImages = [
                "asset/img/bg_card-item1.png",
                "asset/img/bg_card-item2.png",
                "asset/img/bg_card-item3.png"
            ];
            foreach ($cardImages as $image): ?>
                <div class="card" style="width: 18rem; height: 20rem; margin-top: 2rem;">
                    <a href ="#" style="text-decoration: none; color: inherit; height: 100%; display: block;">
                        <img src="<?php echo $image; ?>" class="card-img-top" alt="Card Image" style="width: 100%; height: 100%; object-fit: cover; border-radius: inherit;">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Profile Cards Section -->
    <section class="profile-cards container" style="padding: 4rem 0; color: #fff;">
    <div class="row justify-content-center">
        <?php 
        $profiles = [
            ["name" => "Farhan Firmansyah", "title" => "Raja iblis"],
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
</section>
</main>

<?php include 'includes/footer.php'; ?>
</body>
</html>