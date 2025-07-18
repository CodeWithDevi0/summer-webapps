<!-- 

// PHP break statement //
in this lesson, you'll learn how to use the PHP "break" statement to end the execution of the current for, do...while, while, and switch statements.

// Introduction to the PHP break statement //
The "break" statement terminates the execution of the current for, do...while, while, and switch statements.
This lesson focuses on how to use the break statement with the loops.

Typically, you use the "break" statement with the "if" statement that specifies the condition for the terminating loop:
<?php
if (condition) {
    // code to execute
    //break; // <-- This is the break statement
}
?>
The "break" statement accepts an optional number that specifies the number of nested enclosing structures to be broken out of.
If you don't specify the optional number, it defaults to 1. In this case, the "break" statement only terminates the immediate enclosing structure.

// Using PHP break statement in a for loop //
The following example illustrates how to use the "break" statement in a "for" loop:
<?php
for ($i = 0; $i < 10; $i++) {
    if ($i === 5) {
        break;
    }
    echo $i . '<br>';
    // or
    echo "$i\n";
}
// Output:
// 0
// 1
// 2
// 3
// 4
?>
The "for" statement would execute 10 times from 0 to 9. However, when the $i is 5, the "break" statement is executed, and the loop stops.
The control is passed to the statement after the "for" statement.

// Using PHP break statement in a do...while loop //
The following example illustrates how to use the "break" statement in a "do...while" loop:
<?php
$i = 0;
do {
    if ($i === 5) {
        break;
    }
    echo $i . '<br>';
} while ($i < 10);
// Output:
// 0
// 1
// 2
// 3
// 4
?>
In this example, the "do-while" loop executes only 5 iterations. The variable $i is increased by 1 in each iteration.
When the $i variable reaches 5, the "break" statement is executed, and the loop stops.

// Using PHP break statement in a while loop //
The following example illustrates how to use the "break" statement in a "while" loop:
<?php
$i = 0;
while ($i <= 10) {
    if ($i === 5) {
        break;
    }
    echo $i . '<br>';
    $i++;
}
// Output:
// 0
// 1
// 2
// 3
// 4
?>
This example also displays 5 numbers from 0 to 4. In each iteration, the variable $i is increased by 1.
The "break" statement terminates the loop immediately when the $i variable reaches 5.

// Using break statement to jump out of nested loops //
The following example illustrates how to use the break statement to break out of a nested loop:
<?php
$i = 0;
$j = 0;
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 3; $j++) {
        if ($i === 3) {
            break 2;
        }
        echo "($i, $j)\n";
    }
}
// Output:
// (0, 0)
// (0, 1)
// (0, 2)
// (1, 0)
// (1, 1)
// (1, 2)
// (2, 0)
// (2, 1)
// (2, 2)
?>
In this example, when the variable $i reaches 3, the "break 2" statement terminates the inner and outer loops immediately.

By default, the "break" statement only ends the enclosing loop. But in this example, we us the number 2 in the break statement;
Therefore, it terminates both inner and outer loops.

If you remove the number 2, you will see different output:
<?php
$i = 0;
$j = 0;
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 3; $j++) {
        if ($i === 3) {
            break;
        }
        echo "($i, $j)\n";
    }
}
// Output:
// (0, 0)
// (0, 1)
// (0, 2)
// (1, 0)
// (1, 1)
// (1, 2)
// (2, 0)
// (2, 1)
// (2, 2)
// (4, 0)
// (4, 1)
// (4, 2)
?>

// Summary //
 - Use the PHP "break" statement to terminate the execution of the current for, do...while, while, and switch statements.
 - Use the "break" statement with the "if" statement to terminate the loop at some point.
 - Use the "break" statement with the number to terminate the nested loops.

-->