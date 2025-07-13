<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $message = $_POST['message'];
    $sql = "INSERT INTO guestbook_table (name, message) VALUES ('$name', '$message')";
    $result = $conn->query($sql);
    
    if ($result) {
        echo "Message submitted successfully";
        header("Location: ../homepage.php?success=sent message successfully");
    } else {
        echo "Message submission failed";
    }
}

?>






