<?php 
require 'db.php';

if ($_POST && isset($_POST['task_id'])) {
    $task_id = $_POST['task_id'];
    
    // Simple delete by ID only
    $sql = "DELETE FROM tasks WHERE id = $task_id";

    if (mysqli_query($conn, $sql)) {
        header('Location: ../index.view.php?deleted=Task deleted successfully');
        exit();
    } else {
        echo "Error deleting task: " . mysqli_error($conn);
    }
} else {
    // If no task_id provided, redirect back
    header('Location: ../index.view.php');
    exit();
}

?>