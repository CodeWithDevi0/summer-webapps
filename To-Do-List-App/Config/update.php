<?php
require "db.php";

if ($_POST) {
    $task_id = $_POST['task_id'];
    $task_title = $_POST['task_title'];
    $task_description = $_POST['task_description'];

    $sql = "UPDATE tasks SET task_title = '$task_title', task_description = '$task_description' WHERE id = $task_id";
    
    if (mysqli_query($conn, $sql)) {
        header("Location: ../index.view.php?updated=Task updated successfully");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?> 