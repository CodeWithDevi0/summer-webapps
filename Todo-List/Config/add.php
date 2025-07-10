<?php
include 'db.php';

$task = $_POST['task'];

$sql = "INSERT INTO tasks (name) VALUES ('$task')";
$conn->query($sql);

header("location: ../home.php");
