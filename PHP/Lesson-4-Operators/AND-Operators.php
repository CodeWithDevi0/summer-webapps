<!-- 
 
// PHP AND Operators //
in this lesson, you'll learn about the PHP AND operator and how to use it to build complex conditions/expressions.

// Introduction to the PHP AND Operator //
The logical AND operator accepts two operands and returns true if both operand are true;
otherwise, it returns false.

PHP uses the "and" keyword to represent the logical AND operator.
"expression1 and expression2"

The following table illustrates the result of the logical AND operator:
expression1    expression2    expression1 and expression2
true           true           true
true           false          false
false          true           false
false          false          false

since PHP keywords are case-insensitive, the "AND" and "and" operators are the same:
"expression1 AND expression2" is the same as "expression1 and expression2".

By convention, you should use the "and" operator instead of the "AND" operator.
In addition to using the "and" keyword, PHP uses "&&" as the logical AND operator:
"expression1 && expression2"

The "&&" and "and" operators return the same result.
The only difference between the "&&" and "and" operators is the precedence.
The "and" operator has higher precedence than the "&&" operator.
The precedence of an operator specifies the order in which PHP evaluates.

// PHP AND Operator examples //
Suppose you want to offer discounts to customers who buy more than three items at a price of more than 99.
To determine whether customers can get a discount or not, you can use the AND operator as follows:
<?php
$price = 100;
$qty = 5;

$discounted = $qty > 3 && $price > 99;

var_dump($discounted); // bool(true)
?>

If you change the $qty to 2, the $discounted will be false like this:
<?php
$price = 100;
$qty = 2;

$discounted = $qty > 3 && $price > 99;

var_dump($discounted); // bool(false)
?>

In practice, you'll use the logical AND operator in the if, if-else, if-elseif, while, and do while statements.

// Short-circuiting //
When the value of the first operand is false, the logical AND operator knows that the result must also be false.
In this case, it doesn't evaluate the second operand. This process is called short-circuiting.

See the following example:
<?php
$debug = false;
$debug && print('PHP and operator demo!');
?>

How it works.
 - First, define the variable $debug to initialize it to false.
 - Second, use the logical AND operator to combine the $debug and print().
 Since $debug is false, PHP doesn't evaluate the call to the print() function.

If you change the $debug to true, the print() function will be executed.
<?php
$debug = true;
$debug && print('PHP and operator demo!'); // PHP and operator demo!
?>

// Summary //
 - The precedence of the logical "and" operator is higher than the logical "&&" operator.
 - Use the PHP AND operator (and or &&) to combine two boolean expressions and return true if both expressions are true;
 otherwise, it returns false.
 - The logical AND operator is short-circuiting.

-->