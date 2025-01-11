<?php
include 'includes/header.php'; // Include header.php
include 'includes/db.php';

// Database connection
$pdo = pdo_connect_mysql();

// Handle search query
$search_query = isset($_GET['search']) ? $_GET['search'] : '';
if (!empty($search_query)) {
    $stmt = $pdo->prepare('SELECT * FROM products WHERE name LIKE ? OR description LIKE ? ORDER BY created_at DESC');
    $stmt->execute(['%' . $search_query . '%', '%' . $search_query . '%']);
} else {
    $stmt = $pdo->query('SELECT * FROM products ORDER BY created_at DESC');
}

$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/style/product.css">
    <link rel="stylesheet" href="asset/style/global.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Product Gallery</title>
</head>
<body>
    <main>
        <section class="product-section">
            <h1 class="text-center my-5 text-shadow">Product Gallery</h1>

            <!-- Search Bar -->
            

            <!-- Product Grid -->
            <div class="container">
                <div class="row">
                    <?php if (count($products) > 0): ?>
                        <?php foreach ($products as $product): ?>
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <img src="asset/img/product/<?php echo htmlspecialchars($product['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($product['name']); ?>">
                                    <div class="card-body text-center">
                                        <h5 class="card-title"><?php echo htmlspecialchars($product['name']); ?></h5>
                                        <p class="card-text">$<?php echo htmlspecialchars($product['price']); ?></p>
                                        <button class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#buyModal<?php echo $product['id']; ?>">Buy Now</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Buy Modal -->
                            <div class="modal fade" id="buyModal<?php echo $product['id']; ?>" tabindex="-1" aria-labelledby="buyModalLabel<?php echo $product['id']; ?>" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form method="POST" action="buy.php">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="buyModalLabel<?php echo $product['id']; ?>">Buy <?php echo htmlspecialchars($product['name']); ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            <img src="asset/img/product/<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">

                                                <p><strong>Description:</strong> <?php echo htmlspecialchars($product['description']); ?></p>
                                                <p><strong>Price:</strong> $<?php echo htmlspecialchars($product['price']); ?></p>
                                                <p><strong>Stock:</strong> <?php echo htmlspecialchars($product['stock']); ?></p>
                                                <div class="mb-3">
                                                    <label for="quantity<?php echo $product['id']; ?>" class="form-label">Quantity</label>
                                                    <input type="number" class="form-control" id="quantity<?php echo $product['id']; ?>" name="quantity" min="1" max="<?php echo htmlspecialchars($product['stock']); ?>" required>
                                                </div>
                                                <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success">Confirm Purchase</button>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="text-center">No products found for "<?php echo htmlspecialchars($search_query); ?>".</p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
