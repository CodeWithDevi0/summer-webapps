<!-- 

// PHP Arithmetic Operators //
in this lesson, you'll learn about the arithmetic operators including addition, subtraction, multiplication, division, exponentiation, and modulo
to perform arithmetic operations

// Introduction to the PHP Arithmetic Operators //
PHP provides common arithmetic operators that allow you to perform addition,
subtraction, multiplication, division, exponentiation, and modulo.

The arithmetic operators require numeric values. If you apply an arithmetic operator to non-numeric values, 
PHP will attempt to convert them to numeric values before performing arithmetic operations.

The following table displays the arithmetic operators in PHP:
Operator    Name            Example       Description
+           Addition        $x + $y       returns the sum of $x and $y
-           Subtraction     $x - $y       returns the difference of $x and $y
*           Multiplication  $x * $y       returns the product of $x and $y
/           Division        $x / $y       returns the quotient of $x and $y
%           Modulo          $x % $y       returns the remainder of $x divided by $y
**          Exponentiation  $x ** $y      returns the result of raising $x to the power of $y

// Addition Operator //
The addition operator (+) adds two values together. You can use the addition operator with integers and floats.
The sum of two integers will result in an integer:
<?php
$x = 10;
$y = 20;
$z = $x + $y;
echo $z; // 30
?>

The sum of an integer with a float or two floats will result in a float:
<?php
$x = 10;
$y = 2.0;
$z = $x + $y;
var_dump ($z); // float(12)
?>

Computers cannot represent float precisely. In some cases, the result will not be what you expect.
For example:
<?php
$z = 0.1 + 0.1 + 0.1;
var_dump($z); // float(0.30000000000000004)
?>

You'll encounter an issue if you add floats and compare the result with another float.
For example, the following returns false instead of true:
<?php
$z = 0.1 + 0.1 + 0.1;

var_dump($z === 0.3); // bool(false)
?>

If you add a number and a string, PHP will attempt to convert the string to a number before performing the calculation.
<?php
$x = 1 + '2';
echo $x; // 3
//The result is 3 because PHP converts the string '2' to the integer 2.
?>

If the string contains a non-numeric value, PHP will issue a warning.
For example:
<?php
$x = 1 + '2a';
echo $x; // "Warning: A non-numeric value encountered in ..."
?>

if PHP cannot convert the string to a number, it'll issue fatal and type errors:
<?php
$x = 1 + 'a';
echo $x; // "Fatal error: Uncaught TypeError: ..."
         // "Type error: Unsupported operand types: int + string"
?>

// Subtraction Operator //
The subtraction operator (-) subtracts the right operand from the left operand.
<?php
$x = 10;
$y = 20;
$z = $x - $y;
echo $z; // -10
?>

If you subtract a float from another float or integer, the result will be a float:
<?php
$x = 3.0;
$y = 1.0;

$z = $x - $y;
var_dump($z); // float(2)
?>

Like the addition operator, subtracting a float from another will sometimes result in inaccurate numbers.
For example:
<?php
$x = 0.3 - 0.1;
var_dump($x); // float(0.19999999999999998)
?>

// Multiplication Operator //
The multiplication operator multiplies two numbers.
For example:
<?php
$x = 10;
$y = 20;
$z = $x * $y;
echo $z; // 200
?>

When you multiply a float with an integer or float, the result will be a float:
<?php
$x = 10;
$y = 1.0;
$z = $x * $y;
var_dump($z); // float(10)
?>

// Division Operator //
The division operator divides the first number by the second one.
For example:
<?php
$x = 20;
$y = 10;
$z = $x / $y;
echo $z; // 2
?>

If you attempt to divide a number by zero, PHP will get a fatal error:
<?php
$x = 10;
$y = 0;
$z = $x / $y;
echo $z; // "Fatal error: Uncaught DivisionByZeroError: Division by zero in ..."
?>

// Modulus Operator //
The modulus operator (%) returns the remainder of the division.
For example:
<?php
$x = 5;
$y = 2;
$z = $x % $y;
echo $z; // 1
?>

// Exponentiation Operator //
The exponentiation operator (**) raises the first number to the power of the second one.
For example:
<?php
$x = 10;
$y = 3;
$z = $x ** $y;
echo $z; // 1000
?>

// Summary //
 - Use the addition operator (+) to add two numbers.
 - Use the subtraction operator (-) to subtract the right operand from the left operand.
 - Use the multiplication operator (*) to multiply two numbers.
 - Use the division operator (/) to divide the first number by the second one.
 - Use the modulus operator (%) to return the remainder of the division.
 - Use the exponentiation operator (**) to raise the first number to the power of the second one.

-->