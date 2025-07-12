<!-- 

// PHP NOT Operator //
in this lesson, you'll learn how to use the PHP NOT operator (!) to build complex logical conditions/expressions.

// Introduction to the PHP NOT Operator //
Unlike the logical "AND" and "OR" operators that accept two operands, the logical "NOT" operator accepts only one operand and negates the operand.
In other words, the logical NOT operator returns true if the operand is false and return false if the operand is true.

PHP uses the "!" to represent the logical NOT operator.
"not expression1" is the same as "! expression1".

The following table illustrates the result of the logical NOT operator:
Expression    not Expression
true          false
false         true

The logical NOT operator is also known as the logical negation operator.

// PHP NOT Operator examples //
The following example illustrates how to use the logical not operator (!):
<?php
$priority = 5;
var_dump(! $priority < 5); // bool(true)
?>
In this example, PHP evaluates the expression ! $priority < 5 in the following order:
 - First, $priority < 5 evaluates to false.
 - Second, ! false evaluates to true.

// Summary //
 - PHP NOT operator (not, !) accepts an operand and negate the result of the operand.
-->