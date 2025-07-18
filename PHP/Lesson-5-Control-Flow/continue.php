<!-- 

// PHP continue statement //
in this lesson, you'll learn how to skip the current iteration and start the next one using the PHP "continue" statement.

// Introduction to the PHP continue statement //
The "continue" statement is used within a loop structure such as "for", "do...while", and while loop.
The "continue" statement allows you to immediately skip all the following statements and start the next iteration from the beginning.

Like the "break" statement, the "continue" statement also accepts an optional number that specifies the number of levels of enclosing loops to skip.
If you don't specify the number that follows the "continue" keyword, it defaults to 1.
In this case, the "continue" statement only skips to the end of the current iteration.

Typically, you use the "continue" statement with the "if" statement that specifies the condition for skipping the current iteration.

// PHP continue example //
The following example illustrates how to use the "continue" statement inside a for loop:
<?php
for ($i = 0; $i < 10; $i++) {
    if ($i % 2 === 0) {
        continue;
    }
    echo "$i\n";
}
// Output:
// 1
// 3
// 5
// 7
// 9
?>
How it works:
 - First, use a for loop to iterate from 0 to 9.
 - Second, skip the current echo statement if $i is an even number.
 The $i is an even number when the $i % 2 returns 0. As a result, the output shows only the odd numbers.

// Summary //
 - Use the "continue" statement to skip all the remaining statements and start the next iteration from the beginning.


-->