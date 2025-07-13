<?php
include '../Config/db.php';

$id = $_POST['id'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_quantity = $_POST['product_quantity'];

$sql = "UPDATE products SET product_name = '$product_name', product_price = '$product_price', product_quantity = '$product_quantity' WHERE id = $id";
$result = $conn->query($sql);

if ($result) {
    header('Location: ../edit-products-page.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}