<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Contact Us</title>
</head>
<body>
<body>
<!--Container article-->
<div class="container container-fluid d-flex">
    <!--Title Text-->
    <div class="col align-self-center">
        <div class="text-center" style="color: white; padding-top: 4rem;">
            <p style="font-size: 1.5rem; font-weight: bold;">Marketing Executive</p>
        </div>
    </div>
    <!--Card container-->
    <div class="Card-container container-fluid d-flex gap-4 justify-content-center align-items-center" style="padding-top: 5rem;">
        <div class="card" style="width: 15rem;">
            <img src="asset/img/logo.jpg" alt="card1">
            <div class="card-body">
                <p class="card-text">Our people</p>
            </div>
        </div>
        <div class="card" style="width: 15rem">
            <img src="asset/img/logo.jpg" alt="card1">
            <div class="card-body">
                <p class="card-text">Our people</p>
            </div>
        </div>
        <div class="card" style="width: 15rem">
            <img src="asset/img/logo.jpg" alt="card1">
            <div class="card-body">
                <p class="card-text">Our people</p>
            </div>
        </div>
        <div class="card" style="width: 15rem">
            <img src="asset/img/logo.jpg" alt="card1">
            <div class="card-body">
                <p class="card-text">Our people</p>
            </div>
        </div>
    </div>
    <!--Side img and Text-->
    <div style="display: inline-flex; align-items: center; justify-content: space-between; color: white; padding: 1.25rem; padding-top: 4rem; border-radius: 0.5rem; width: 100%; max-width: 50rem; margin: 0 auto;">
    <div style="flex: 1; padding-right: 1.25rem;">
        <h3 style="font-size: 0.875rem; text-transform: uppercase;">GET IN TOUCH</h3>
        <h2 style="font-size: 1.5rem; margin-top: 0.625rem; margin-bottom: 1.25rem;">Kunjungi Kantor Marketing Kami</h2>
        <p><strong>Head Office / Marketing Office</strong></p>
        <p>info.isekairesidence@japan.com</p>
        <p>Senin - Jumat: 08.00 - 17.00</p>
        <p>Sabtu - Minggu: 10.30 - 15.30</p>
        <p>www.isekairesidence.com</p>
        <p>@isekai.residence</p>
        <p>@isekai.residence</p>
        <p>@isekai.residence</p>
    </div>
    <div style="flex: 1; width: 100%; max-width: 18.75rem; height: 18.75rem; border-radius: 0.5rem; object-fit: cover; overflow: hidden;">
        <img src="asset/img/bg_card-item1.png" alt="side_img" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
    </div>
<!--Contact Form-->
<div class="container-fluid align-self-center">
<!--Title-->        
        <div class="text-start" style="color: white; padding-top: 4rem;">
            <p style="font-size: 1rem;">Leave a Message</p>
            <p style="font-size: 1.5rem; font-weight: bold;">We Love to Hear From You</p>
        </div>
<!--Form-->
        <form style="padding-bottom: 4rem;">
        <div class="mb-3">
            <label for="InputEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="InputContact" class="form-label">Contact</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="08**********">
        </div>
        <div class="mb-3">
            <label for="InputName" class="form-label">Nama</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="John Doe">
        </div>
        <div class="mb-3">
            <label for="Textarea" class="form-label">Message</label>
            <textarea class="form-control" id="Textarea" rows="3"></textarea>
        </div>
        <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Send Message</button>
        </div>
        </form>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php include 'includes/footer.php'; ?>
</body>
</html>