<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operation = $_POST['operation'];

$result = 0;

$result = match($operation) {
    '+' => $num1 + $num2,
    '-' => $num1 - $num2,
    '*' => $num1 * $num2,
    '/' => $num1 / $num2,
    default => 'Invalid operation',
};

$result = htmlspecialchars($result);

if ($result == 'Invalid operation') {
    echo "<script>alert('Invalid operation');</script>";
} else {
    echo "<script>alert('Result: " . $result . "');</script>";
    header('Location: ../homepage.php?calculate=success&result=' . $result);
}