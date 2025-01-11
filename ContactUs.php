<?php include 'includes/header.php'; ?>
<?php
include 'includes/db.php'; 

// Start the session if it hasn't been started already
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$error = "";
$success = "";

// Ensure the user is logged in
if (!isset($_SESSION["is_login"])) {
    header("Location: ContactUs.php");
    exit();
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Capture form input
    $contact = $_POST['contact'];
    $message = $_POST['message'];
    $username = $_SESSION['username'];  // Assuming the username is stored in the session

    // Create the PDO connection
    $pdo = pdo_connect_mysql();

    // Validate the input
    if (empty($message)) {
        $error = "Message field cannot be empty.";
    } else {
        try {
            // Check if the user exists
            $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
            $stmt->bindParam(':username', $username);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                // Insert the message into the Contact table
                $stmt = $pdo->prepare("INSERT INTO Contact (username, contact, message) VALUES (:username, :contact, :message)");
                $stmt->bindParam(':username', $username);
                $stmt->bindParam(':contact', $contact);
                $stmt->bindParam(':message', $message);

                if ($stmt->execute()) {
                    $success = "Message sent successfully!";
                } else {
                    $error = "Failed to send message. Please try again.";
                }
            } else {
                $error = "User not found.";
            }
        } catch (PDOException $e) {
            $error = "Database query failed: " . $e->getMessage();
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/style/contactus.css">
    <link rel="stylesheet" href="asset/style/global.css">
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
    <div class="card-0" style="width: 15rem; height: 20rem; overflow: hidden; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; border: 1px solid #ccc; border-radius: 5px;">
        <img src="asset/img/farhan.jpg" alt="card1" style="width: 100%; height: auto; max-height: 70%; object-fit: cover;">
        <div class="card-body" style="flex-grow: 1; display: flex; align-items: center; justify-content: center; padding: 1rem;">
            <p class="card-text">Farhan Firmansyah</p>
        </div>
    </div>
    <div class="card-1" style="width: 15rem; height: 20rem; overflow: hidden; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; border: 1px solid #ccc; border-radius: 5px;">
        <img src="asset/img/satya.gif" alt="card1" style="width: 100%; height: auto; max-height: 70%; object-fit: cover;">
        <div class="card-body" style="flex-grow: 1; display: flex; align-items: center; justify-content: center; padding: 1rem;">
            <p class="card-text">Krisna Satya A</p>
        </div>
    </div>
    <div class="card-2" style="width: 15rem; height: 20rem; overflow: hidden; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; border: 1px solid #ccc; border-radius: 5px;">
        <img src="asset/img/hernanda.jpg" alt="card1" style="width: 100%; height: auto; max-height: 70%; object-fit: cover;">
        <div class="card-body" style="flex-grow: 1; display: flex; align-items: center; justify-content: center; padding: 1rem;">
            <p class="card-text">M. Hernanda Fikri W</p>
        </div>
    </div>
    <div class="card-3" style="width: 15rem; height: 20rem; overflow: hidden; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; border: 1px solid #ccc; border-radius: 5px;">
        <img src="asset/img/firefly.webp" alt="card1" style="width: 100%; height: auto; max-height: 70%; object-fit: cover;">
        <div class="card-body" style="flex-grow: 1; display: flex; align-items: center; justify-content: center; padding: 1rem;">
            <p class="card-text">Nanda Muhammad F</p>
        </div>
    </div>
</div>

    <!--Side img and Text-->
<div style="display: flex; align-items: center; justify-content: space-between; color: white; padding: 1.25rem 1.25rem 4rem; border-radius: 0.5rem; max-width: 50rem; margin: 0 auto;">
    <div style="flex: 1; padding-right: 1.25rem;">
        <h3 style="font-size: 0.875rem; text-transform: uppercase; margin-bottom: 0.625rem;">GET IN TOUCH</h3>
        <h2 style="font-size: 1.5rem; margin: 0.625rem 0 1.25rem;">Kunjungi Kantor Marketing Kami</h2>
        <p><strong>Head Office / Marketing Office</strong></p>
        <p>info.isekairesidence@japan.com</p>
        <p>Senin - Jumat: 08.00 - 17.00</p>
        <p>Sabtu - Minggu: 10.30 - 15.30</p>
        <p>www.isekairesidence.com</p>
        <p>@isekai.residence</p>
        <p>@isekai.residence</p>
        <p>@isekai.residence</p>
    </div>
    <div style="flex: 1; max-width: 40rem; height: 20rem; border-radius: 0.5rem; overflow: hidden;">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d660.3547799242144!2d111.54240048003608!3d-7.6394963000000065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sid!2sid!4v1736310582571!5m2!1sid!2sid" 
            style="width: 100%; height: 100%; border: none;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>

<!--Contact Form-->
<div class="container-fluid align-self-center">
    <!-- Title -->
    <div class="text-start" style="color: white; padding-top: 4rem;">
        <p style="font-size: 1rem;">Leave a Message</p>
        <p style="font-size: 1.5rem; font-weight: bold;">We Love to Hear From You</p>
    </div>

    <!-- Error and Success Messages -->
    <?php if ($error): ?>
        <div class="alert alert-danger"> <?= htmlspecialchars($error) ?> </div>
    <?php endif; ?>

    <?php if ($success): ?>
        <div class="alert alert-success"> <?= htmlspecialchars($success) ?> </div>
    <?php endif; ?>

    <!-- Form -->
    <form method="POST" style="padding-bottom: 4rem;">
        <div class="mb-3">
            <label for="InputContact" class="form-label">Contact</label>
            <input type="text" class="form-control" name="contact" id="InputContact" placeholder="08**********">
        </div>
        <div class="mb-3">
            <label for="Textarea" class="form-label">Message</label>
            <textarea class="form-control" name="message" id="Textarea" rows="3" required></textarea>
    </div>
        <div class="col-auto">
        <button type="submit" name="submit" class="btn btn-primary mb-3">Send Message</button>
        </div>
        </form>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php include 'includes/footer.php'; ?>
</body>
</html>