<!-- 

// PHP OR Operators //
in this lesson, you'll learn about the PHP OR operator (or or ||) and how to use it to build complex conditions/expressions.

// Introduction to the PHP OR Operator //
The logical OR operator accepts two operands and returns true if either operand is true;
otherwise, it returns false. In other words, the logical OR operator returns false if Both operands are false.

To represent the logical OR operator, PHP uses either the "or" keyword or the "||" operator.
"expression1 or expression2" is the same as "expression1 || expression2".

The following table illustrates the result of the logical OR operator:
expression1    expression2    expression1 or/|| expression2
true           true           true
true           false          true
false          true           true
false          false          false

Since PHP keywords are case-insensitive, the "OR", "Or" and "or" operators are the same:
"expression1 OR expression2" is the same as "expression1 or expression2" and "expression1 Or expression2".

// PHP OR Operator examples //
Suppose that you need to clear the cache of the website if the flag $expired or $purge is set to true.
To do that, you can use the logical OR operator as follows:
<?php
$expired = true;
$purge = false;
$clear_cache = $expired || $purge;
var_dump($clear_cache); // bool(true)
?>

Since $expired is true, the result of the logical OR operator is true.
However, if you change the $expired to false, the result of the logical OR operator is false.
<?php
$expired = false;
$purge = false;
$clear_cache = $expired || $purge;
var_dump($clear_cache); // bool(false)
?>

In practice, you'll use the logical OR operator in the if, if-else, if-elseif, while, and do while statements.

// Short-circuiting //
When the first operand is true, the logical OR operator knows that the result must also be true.
In this case, it doesn't evaluate the second operand. This process is called short-circuiting.

In practice, you often find that the or operator is used in the following:
"function_call() || die(message)"

If the function_call() returns true, the die() function is not executed.
PHP will never execute the second operand which is call to the die() function.
Otherwise, PHP will call the die() function with an error message.
For example:
<?php 

function connect_to_db()
{
    return false;
}
connect_to_db() || die('Failed to connect to the database');
// Output: Failed to connect to the database
?>
In this example, the connect_to_db() function returns false, so the die() function is executed that shows the error message.

// The PHP OR gotchas //
See the following example:
<?php
$result = false or true;
var_dump($result); // bool(false)
?>
In this example, you would expect that the $result is true because false or true expression returns true.
However, this is not the case.

When evaluating the following statement:
$result = false or true;
PHP evaluates the $result = false first then the "or" operator second because the "=" operator has higher precedence than the "or" operator.
"Notice that each operator has precedence. And PHP will evaluate the operators with the higher precedence first before the ones with
the lower precedence."
Technically, it is equivalent to the following:
($result = false) or true;
Therefore, $result is assigned the false value.
To fix this, you need to use parentheses to change the order evaluation:
<?php
$result = (false or true);
var_dump($result); // bool(true)
// or
$result = false || true;
var_dump($result); // bool(true)
?>
Therefore, it's a good practice to use the "||" operator instead of the "or" operator.

// Summary //
 - Use the PHP OR operator (or or ||) to combine two boolean expressions and return true if either expression is true;
 otherwise, it returns false.
 - The logical OR operator is short-circuiting.
 - Use the "||" instead of the "or" operator.
 
-->