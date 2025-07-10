<?php
require "./db.php";

$task_title = $_POST['task_title'];
$task_description = $_POST['task_description'];

$sql = "INSERT INTO tasks (task_title, task_description) VALUES ('$task_title', '$task_description')";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: ../index.view.php?success=Task added successfully");
} else {
    echo "Error: " . mysqli_error($conn);
}



?>