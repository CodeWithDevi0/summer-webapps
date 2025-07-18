<!-- 

// PHP do while loop //
in this lesson, you'll learn how to use the PHP "do...while" loop statement to execute a code block repeatedly.

// Introduction to the PHP do while loop //
The PHP "do...while" statement allows you to execute a code block repeatedly based on a boolean expression. Here's the syntax of the PHP "do...while":
<?php
do {
    // code to execute
} while (condition/expression);
?>

How it works:
 - First, PHP executes the code block in the "do" statement.
 - Second, PHP evaluates the condition/expression.

Unlike the "while" statement, PHP evaluates the condition/expression at the end of each iteration.
It means that the loop always executes at least once, even the expression is false before the loop enters.

The following flowchart illustrates how the "do...while" loop works:
<img src="https://www.phptutorial.net/wp-content/uploads/2021/03/php-do-while.png" alt="PHP do while loop flowchart">

// do...while vs while //
The difference between the "do...while" and "while" statements are:
 - PHP executes the statement in "do...while" at least once, whereas it won't execute the statement in the while statement if the expression
 is false.
 - PHP evaluates the condition/expression in the "do...while" statement at the end of each iteration.
 Conversely, PHP evaluates the expression in the "while" statement at the beginning of each iteration.

// PHP do...while loop statement example //
In the following example, the code block inside the "do..while" loop statement executes once.
<?php
$i = 0;
do {
    echo $i;
} while ($i > 0);
?>
The code inside the loop body executes first to display the variable $i.
Because the value of the $i is 0, the condition is met, and the loop stops.

In the following example, the code block inside the "do...while" loop executes ten times:
<?php
$i = 10;

do {
    echo $i . '<br>';
    $i--;
} while ($i > 0);
?>
In this lesson, you've learned how to use a PHP "do...while" loop statement to execute a code block repeatedly until a condition is false.

// Summary //
 - Use the PHP "do...while" statement to execute a code block repeatedly until a condition is false.
 - Unlike the "while" statement, PHP evaluates the condition/expression at the end of each iteration.

-->