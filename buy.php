<?php
include 'includes/db.php';

// Database connection
$pdo = pdo_connect_mysql();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;
    $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 0;

    // Get product details
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([$product_id]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($product && $quantity > 0 && $quantity <= $product['stock']) {
        // Update stock
        $new_stock = $product['stock'] - $quantity;
        $stmt = $pdo->prepare('UPDATE products SET stock = ? WHERE id = ?');
        $stmt->execute([$new_stock, $product_id]);

        // Redirect to product page with success message
        header('Location: product.php?success=1');
        exit;
    } else {
        // Redirect to product page with error message
        header('Location: product.php?error=1');
        exit;
    }
} else {
    // Redirect if accessed directly
    header('Location: product.php');
    exit;
}
