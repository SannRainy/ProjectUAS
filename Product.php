<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <style>
        .product-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 40px;
            background-color: #333;
        }

        .product-card {
            width: 200px;
            height: 300px;
            background-color: #B0C4DE;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: center;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .product-card span {
            width: 100%;
            text-align: center;
            background-color: #f1f1f1;
            padding: 10px 0;
            font-weight: bold;
            border-radius: 0 0 10px 10px;
        }
    </style>
</head>
<body>
        

    <section class="product-container">
        <div class="product-card">
            <span>District Casual</span>
        </div>
        <div class="product-card">
            <span>District Casual</span>
        </div>
        <div class="product-card">
            <span>District Casual</span>
        </div>
    </section>
    <?php include 'includes/footer.php'; ?>
</body>
</html>