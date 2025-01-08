<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/style/location.css">
    <title>Location</title>
</head>
<body>
<div style="padding: 2rem; color: white; border-radius: 0.5rem; padding-top: 4rem;">
    <div class="content-container">
    <!-- First Section -->
    <div class="section">
        <div class="image-content">
            <img src="asset/img/bg_card-item1.png" alt="card1">
        </div>
        <div class="text-content">
            <h2>Damai</h2>
            <p>Lorem ipsum dolor amet, consectetur adipiscing elit. Eros eu elementum nulla himenaeos sagittis accumsan nec...</p>
        </div>
    </div>

    <!-- Second Section -->
    <div class="section">
        <div class="text-content">
            <h2>Damai</h2>
            <p>Lorem ipsum dolor amet, consectetur adipiscing elit. Eros eu elementum nulla himenaeos sagittis accumsan nec...</p>
        </div>
        <div class="image-content">
            <img src="asset/img/bg_card-item2.png" alt="card2">
        </div>
    </div>

    <!-- Third Section -->
    <div class="section">
        <div class="image-content">
            <img src="asset/img/bg_card-item3.png" alt="card3">
        </div>
        <div class="text-content">
            <h2>Damai</h2>
            <p>Lorem ipsum dolor amet, consectetur adipiscing elit. Eros eu elementum nulla himenaeos sagittis accumsan nec...</p>
        </div>
    </div>
</div>

<!--Map-->
<div class="map-container">
    <h2 class="map-title">Lokasi Strategis</h2>
    <div class="map-iframe-container">
        <!-- Replace this div with an iframe for Google Maps -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d660.3547799242144!2d111.54240048003608!3d-7.6394963000000065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sid!2sid!4v1736310582571!5m2!1sid!2sid" 
            class="map-iframe" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>


</div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>