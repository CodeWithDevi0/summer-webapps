<!-- 

// PHP Assignment Operators //
in this lesson, you'll learn about the most commonly used PHP assignment operators.

// Introduction to the PHP Assignment Operators //
PHP uses the "=" to represent the assignment operator.

The following shows how to assign a value to a variable using the assignment operator:
<?php
$variable_name = expression;
?>
On the left side of the assignment operator (=) is a variable to which you want to assign a value. And on the right side of the assignment
operator (=) is  a value or an expression.

When evaluating the assignment operator (=), PHP evaluates the expression on the right side first and assigns the result to the variable
on the left side.
For example:
<?php
$x = 10;
$y = 20;
$total = $x + $y;

echo $total; // 30
?>
In this example, we assign 10 to $x, and 20 to $y, and then the sum of $x and $y is assigned to the $total variable.

// Arithmetic Assignment Operators //
Sometimes you want to increase a variable by specific value.
For example:
<?php
$counter = 1;
$counter = $counter + 1;

echo $counter; // 2
?>
How it works.
 - First, $counter is set to 1.
 - Then, increase the $counter by 1 and assign the result to the $counter variable.

After the assignments, the value of $counter is 2.

PHP provide the arithmetic assignment operators "+=" that can do the same but with a shorter code.
For example:
<?php
$counter = 1;
$counter += 1;

echo $counter; // 2
?>
The expression $counter += 1 is equivalent to $counter = $counter + 1.
Besides the "+=" operator, PHP provides other arithmetic assignment operators:
Operator    Example     Equivalent to     Operation
+=          $x += $y    $x = $x + $y      Addition
-=          $x -= $y    $x = $x - $y      Subtraction
*=          $x *= $y    $x = $x * $y      Multiplication
/=          $x /= $y    $x = $x / $y      Division
%=          $x %= $y    $x = $x % $y      Modulus
**=         $x **= $y   $x = $x ** $y     Exponentiation

// Concatenation Assignment Operator //
PHP uses the concatenation operator "." to concatenate two strings.
For example:
<?php
$greeting = 'Hello ';
$name = 'John';

$greeting = $greeting . $name;
echo $greeting; // Hello John
?>
By using the concatenation assignment operator ".", you can concatenate two strings and assigns the result string to a variable.

// Summary //
 - Use the assignment operator "=" to assign a value to a variable.
 - The assignment expression returns the value assigned to the variable.
 - Use the arithmetic assignment operators to perform arithmetic operations and assign the result to a variable.
 - Use the concatenation assignment operator "." to concatenate two strings and assign the result to a variable.

-->