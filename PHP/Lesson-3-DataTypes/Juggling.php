<!-- 
 
// PHP Type Juggling //
in this lesson, you'll learn about PHP Type junggling and how it works.

// Introduction to PHP Type Juggling //
PHP is a loosely typed programming language. It means that when you define a variable, you don't need to declare its type.
Internally, PHP will determine the type by the context in which you use the variable.
For example, if you assign a string to a variable, its type will be the string:
<?php
$my_var = 'PHP'; // string
?>

If you assign an integer to the same variable, and its type will be the integer:
<?php
$my_var = 'PHP';
$my_var = 100; // integer
?>

PHP has a feature called type juggling. It means that when comparing variables of different types, PHP will convert them to the common,
comparable type. For example:
<?php
$qty = 20;
if ($qty == '20') {
    echo 'equal'; 
}
// output: equal
?>

Because of type juggling, PHP converts the string '20' to an integer (20) and compares it with the $qty variable.
Therefore, you'll see the message "equal" in the output.

The type juggling also works in arithmetic operations for variables of different types.
The following example illustrates how the type juggling works in an arithmetic operation:
<?php
$total = 100;
$qty = "20";
$total = $total + $qty;
echo $total; // 120
?>

The type of $total is an integer, whereas the $qty is a string. To calculate the sum, PHP first converts the value of the $qty variable to an integer.
The result is an integer.

Consider the following example:
<?php
$total = 100;
$qty = "20 pieces";
$total = $total + $qty;
echo $total; // 120
?>

In this example, PHP casts the string "20 pieces" as an integer 20 before calculating the sum.
Note that PHP also throws a warning message:
"Warning: A non-numeric value encountered in ..."

// Summary //
 - PHP is a loosely typed programming language. PHP determines the variable type based on the value.
 - When comparing values of different types, PHP implicitly converts them to the same comparable type.


-->