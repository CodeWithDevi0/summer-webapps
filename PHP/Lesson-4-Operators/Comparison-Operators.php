<!-- 

// PHP Comparison Operators //
in this lesson, you'll learn how to use PHP comparison operators to compare values.

// Introduction to the PHP Comparison Operators //
A comparison operator allows you to compare two values and returns true if the comparison is truthful and false otherwise.

The following table shows the comparison operators in PHP:
Operator    Name            Description
==          Equal           Returns true if the two operands are equal; otherwise, it returns false.
===         Identical       Returns true if the two operands are equal and of the same type; otherwise, it returns false.
!= or <>    Not Equal       Returns true if the two operands are not equal; otherwise, it returns false.
!==         Not Identical   Returns true if the two operands are not equal or not of the same type; otherwise, it returns false.
>           Greater Than    Returns true if the left operand is greater than the right operand; otherwise, it returns false.
>=          Greater Than or Equal To Returns true if the left operand is greater than or equal to the right operand; otherwise, it returns false.
<           Less Than       Returns true if the left operand is less than the right operand; otherwise, it returns false.
<=          Less Than or Equal To Returns true if the left operand is less than or equal to the right operand; otherwise, it returns false.

// Equal Operator //
The equal operator (==) returns true if the two operands are equal.
For example:
<?php
$x = 10;
$y = 10;
var_dump($x == $y); // bool(true)
?>

The following example returns false because 10 is not equal to 20:
<?php
$x = 10;
$y = 20;
var_dump($x == $y); // bool(false)
?>

The following example compares the number 20 with a string '20', it also returns true.
<?php
$x = 20;
$y = '20';
var_dump($x == $y); // bool(true)
?>

If you want to compare two values with the consideration of type, you can use the identical operator (===).

// Not Equal Operator ( != or <> ) //
The not equal to (!= or <>) operator returns true if the lefthand value is not equal to the righthand value;
otherwise, it returns false.
For example:
<?php
$x = 10;
$y = 20;
var_dump($x != $y); // bool(true)
?>

// Identical Operator ( === ) //
The identical operator returns true if both values are equal and have the same type;
otherwise, it returns false.
For example:
<?php
$x = '10';
$y = 10;
var_dump($x === $y); // bool(false)
?>

// Not Identical Operator ( !== ) //
The not identical operator (!==) returns true if the two operands are not equal or not of the same type;
otherwise, it returns false.
For example:
<?php
$x = 20;
$y = 10;

var_dump($x !== $y); // bool(true)

$x = 20;
$y = '20';
var_dump($x != $y); // bool(false)
?>

// Greater Than Operator ( > ) //
The greater than operator returns true if the left operand is greater than the right operand;
otherwise, it returns false.
for example:
<?php
$x = 20;
$y = 10;
var_dump($x > $y); // bool(true)
var_dump($y > $x); // bool(false)
?>

// Greater Than or Equal To Operator ( >= ) //
The greater than or equal to operator returns true if the left operand is greater than or equal to the right operand;
otherwise, it returns false.
For example:
<?php
$x = 20;
$y = 20;
var_dump($x >= $y); // bool(true)
var_dump($y >= $x); // bool(false)
?>

// Less Than Operator ( < ) //
The less than operator returns true if the left operand is less than the right operand;
otherwise, it returns false.
For example:
<?php
$x = 10;
$y = 20;
var_dump($x < $y); // bool(true)
var_dump($y < $x); // bool(false)
?>

// Less Than or Equal To Operator ( <= ) //

The less than or equal to operator returns true if the left operand is less than or equal to the right operand;
otherwise, it returns false.
For example:
<?php
$x = 10;
$y = 20;
var_dump($x <= $y); // bool(true)
var_dump($y <= $x); // bool(false)
?>

// Summary //
 - Use the equal operator (==) to compare two values.
 - Use the not equal operator (!= or <>) to compare two values.
 - Use the identical operator (===) to compare two values with the consideration of type.
 - Use the not identical operator (!==) to compare two values with the consideration of type.
 - Use the greater than operator (>) to compare two values.
 - Use the greater than or equal to operator (>=) to compare two values.
 - Use the less than operator (<) to compare two values.
 - Use the less than or equal to operator (<=) to compare two values.
-->