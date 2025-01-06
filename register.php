<?php
include 'includes/db.php';

session_start();

    $register_message = '';

    if(isset($_SESSION["is_login"])){
        header("location: home.php");
    }

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $pdo = pdo_connect_mysql();

    
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "Username sudah terdaftar. Silakan pilih username lain.";
    } else {
        
        $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);

        if ($stmt->execute()) {
            echo "Register Berhasil";
            header("location: login.php");
        } else {
            echo "Register Gagal";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/style/register.css">
    <title>Login</title>

</head>
<body>
    <div class="register-container">
    <h3>Daftar Akun</h3> 
    <form action="register.php" method="POST">
        <input type="text" placeholder="username" name="username"/>
        <input type="password" placeholder="password" name="password"/>
        <button type="submit" name="register">daftar sekarang</button>
    </form>
    </div>

</body>
</html>
<?php include 'includes/footer.php'; ?>