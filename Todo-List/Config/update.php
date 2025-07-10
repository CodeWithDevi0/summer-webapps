<?php

include './db.php';

$id = $_GET['id'];
$task = $_POST['task'];

$sql = "UPDATE tasks SET name = '$task' WHERE id = $id";
$result = $conn->query($sql);

if ($result) {
    header('Location: ../home.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>