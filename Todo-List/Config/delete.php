<?php
include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM tasks WHERE id = $id";
$conn->query($sql);

header("location: ../home.php");
