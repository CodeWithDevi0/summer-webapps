<!-- 
 
// PHP while loop //
in this lesson, you'll learn how to use the PHP "while" statement to execute a code block repeatedly as long as a condition is true.

// Introduction to the PHP while loop //
The "while" statement allows you to execute a code block repeatedly as long as a condition is true.
The syntax of the "while" statement is as follows:
<?php
while (condition/expression) {
    // code to execute
}
?>
How it works:
 - First, PHP evaluates the condition. If the condition is true, the code block is executed.
 - Second, the condition is evaluated again. If the condition is still true, the code block is executed again.
 - This process continues until the condition is false.

If the expression evaluates to false, before the first iteration starts, the loop ends immediately.
Since PHP evaluates the expression before each iteration, the "while" loop is also known as a "pre-test" loop.

The "while" doesn't require curly braces {} if you have one statement in the loop body:
<?php
while (condition/expression)
    // code to execute
?>
However, it's a good practice to always include curly braces {} with the "while" statement even though you have on statement to execute.

The following flowchart illustrates how the "while" loop works:
<img src="https://www.phptutorial.net/wp-content/uploads/2021/03/php-while.png" alt="PHP while loop flowchart">

// PHP while loop example //
The following example uses the "while" loop to add numbers from 1 to 10:
<?php
$total = 0;
$i = 1;

while ($i <= 10) {
    $total += $i;
    $i++;
}
echo $total;
// Output: 55
?>

// The alternative syntax for the PHP while loop //
The alternative syntax for the "while" loop is as follows:
<?php
while (condition/expression):
    // code to execute
endwhile;
?>
The following uses the alternative syntax of the "while" statement to sum the whole numbers from 1 to 10:
<?php
$total = 0;
$i = 1;

while ($i <= 10):
    $total += $i;
    $i++;
endwhile;

echo $total;
// Output: 55
?>

// Summary //
 - Use the PHP "while" statement to execute a code block repeatedly as long as a condition is true.

-->