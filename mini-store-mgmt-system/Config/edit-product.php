<?php
include '../Config/db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM products WHERE id = $id";
$result = $conn->query($sql);

$row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Edit Product</h1>
        <form action="update-product.php" method="post">
            <input type="hidden" name="id" value="<?= $row['id']; ?>">
            <input type="text" name="product_name" value="<?= $row['product_name']; ?>">
            <input type="text" name="product_price" value="<?= $row['product_price']; ?>">
            <input type="text" name="product_quantity" value="<?= $row['product_quantity']; ?>">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="../edit-products-page.php" class="btn btn-warning">Cancel</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>