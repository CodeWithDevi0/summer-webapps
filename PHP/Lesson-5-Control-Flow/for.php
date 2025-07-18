<!-- 

// PHP for loop //
in this lesson, you'll learn about PHP "for" statement to execute a block of code repeatedly.

// Introduction to the PHP for loop //
The "for" statement allows you to execute a code block repeatedly.
The syntax of the "for" statement is as follows:
<?php
for (initialization; condition; increment/decrement) {
    // code to execute
}
?>
How it works:
 - The initialization expression is executed only once when the loop starts.
 - The condition/expression is evaluated once in each iteration. If the condition is true, the code block is executed.
 Otherwise, the loop is terminated.
 - The increment/decrement expression is executed once after each iteration.

PHP allows you to specify multiple expressions in the initialization, condition, and increment/decrement sections of the "for" statement.

In addition, you can leave the initialization, condition, and increment/decrement sections empty, indicating that PHP should do nothing for that phase.
The following flowchart illustrates how the "for" statement works:
<img src="https://www.phptutorial.net/wp-content/uploads/2021/03/php-for.png" alt="PHP for loop flowchart">
When you leave all three parts empty, you should use a "break" statement to exit the loop at some point.
Otherwise, the loop will run forever. // infinite loop
<?php
for (;;) {
    echo 'Hello, world!';
    if (condition) {
        break;
    }
}
?>

// PHP for statement example //
The following shows a simple example that adds numbers from 1 to 10:
<?php
$total = 0;

for ($i = 1; $i <= 10; $i++) {
    $total += $i;
}
echo $total;
// Output: 55
?>
How it works:
 - First, initialize the $total variable to 0.
 - Second, start the loop by setting the variable $i to 1. This initialization will be evaluated once when the loop starts.
 - Third, the loop continues as long as $i is less than or equal to 10. The expression $i <= 10 is evaluated once in every iteration.
 - Fourth, the expression $i++ is evaluated after each iteration.
 - Finally, the loops runs exactly 10 iterations and stops once $i becomes 11.

// Alternative syntax for the PHP for statement //
The "for" statement has the alternative syntax as follows:
<?php
for (initialization; condition; increment/decrement):
    // code to execute
endfor;
?>

The following script uses the alternative syntax to add numbers from 1 to 10:
<?php
$total = 0;

for ($i = 1; $i <= 10; $i++):
    $total += $i;
endfor;
echo $total;
// Output: 55
?>

// Summary //
 - Use the PHP "for" statement to execute a code block a specified number of times.
 - Use the "break" statement to exit the loop at some point.



-->