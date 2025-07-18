<!-- 

// PHP if-elseif //
in this lesson, you'll learn about the PHP "if-elseif" statement to execute code blocks based on multiple boolean expressions.

// Introduction to the PHP if-elseif statement //
The "if" statement evaluates one condition/expression and executes a code block if the condition/expression is true.

The "if" statement can have one or more optional "elseif" clauses.
The "elseif" is a combination of "if" and "else" statements:

<?php
if (condition/expression) {
    // code to execute if the condition is true
} elseif (condition/expression2) {
    // code to execute if the condition2 is true
} elseif (condition/expression3) {
    // code to execute if the condition3 is true
} elseif (condition/expression4) {
    // code to execute if the condition4 is true
} else {
    // code to execute if all conditions are false
}
?>

in this syntax, PHP evaluates the conditions/expressions one by one from top to bottom.
If the condition/expression is true, PHP executes the code block in the "if" or "elseif" clause and skips the rest of the conditions/expressions.
If all conditions/expressions are false, PHP executes the code block in the "else" clause.

The following flowchart illustrates how the "if-elseif" statement works:
<img src="https://www.phptutorial.net/wp-content/uploads/2021/03/php-if-elseif.png" alt="PHP if-elseif statement flowchart">

The following example uses the "if-elseif" statement to display whether the variable $x is greater than $y:
<?php
$x = 10;
$y = 20;

if ($x > $y) {
    $message = 'x is greater than y';
} elseif ($x < $y) {
    $message = 'x is less than y';
} else {
    $message = 'x is equal to y';
}
echo $message;
// Output: x is less than y
?>

// PHP if-elseif statement in HTML //
PHP also supports an alternative syntax for the "elseif" without using curly braces like the following:
<?php
if (condition/expression) :
    // code to execute if the condition is true
elseif (condition/expression2) :
    // code to execute if the condition2 is true
elseif (condition/expression3) :
    // code to execute if the condition3 is true
else :
    // code to execute if all conditions are false
endif;
?>
in this syntax:
 - Use a colon (:) instead of curly braces {} after each condition/expression following the "if" or "elseif" keyword.
 - Use the "endif" keyword instead of the "}" to close the "if-elseif" statement.

The following example uses the "elseif" alternative syntax:
<?php
$x = 10;
$y = 20;

if ($x > $y) :
    $message = 'x is greater than y';
elseif ($x < $y) :
    $message = 'x is less than y';
else :
    $message = 'x is equal to y';
endif;
echo $message;
// Output: x is less than y
?>

// PHP elseif vs else if //
PHP allows you to write "else if"(in two words) that has the same result as elseif(in a single word):
<?php
if (condition/expression) {
    // code to execute if the condition is true
} else if (condition/expression2) {
    // code to execute if the condition2 is true
} else {
    // code to execute if all conditions are false
}
?>
The "else if" in this case, is the same as the following nested if...else structure:
<?php
if (condition/expression) {
    // code to execute if the condition is true
} else {
    if (condition/expression2) {
        // code to execute if the condition2 is true
    }
}
?>

If you use the alternative syntax, you need to use the "if..elseif" statement instead of the "if...else if" statement. Otherwise,
you'll get an error:
<?php
$x = 10;    
$y = 20;

if ($x > $y) :
    $message = 'x is greater than y';
//else if ($x < $y) : // <-- Error here
    $message = 'x is less than y';
else :
    $message = 'x is equal to y';
endif;
echo $message;
// Output: x is less than y
?>

// Summary //
 - Use the PHP "if-elseif" statement to execute a code block based on multiple boolean expressions.
 - Only the "if...elseif" supports the alternative syntax, the "if...else if" is not supported.
 - Do use the "elseif" whenever possible to make your code more consistent and readable.

-->