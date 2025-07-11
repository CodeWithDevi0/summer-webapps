<?php
require 'db.php';

$productName = $_POST['productName'];
$productPrice = $_POST['productPrice'];
$productQuantity = $_POST['productQuantity'];

$sql = "INSERT INTO products (product_name, product_price, product_quantity) VALUES ('$productName', '$productPrice', '$productQuantity')";

$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: ../homepage.php?success=Product added successfully");
} else {
    echo "Error: " . mysqli_error($conn);
}





