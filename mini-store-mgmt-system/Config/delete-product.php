<?php
include '../Config/db.php';

$id = $_GET['id'];

$sql = "DELETE FROM products WHERE id = $id";

$result = $conn->query($sql);

if ($result) {
    header('Location: ../edit-products-page.php?success=Product deleted successfully');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>