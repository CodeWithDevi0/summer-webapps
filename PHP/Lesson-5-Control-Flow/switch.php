<!-- 
 
// PHP switch statement //
in this lesson, you'll learn about the PHP switch statement, which executes a code block by matching an expression with multiple values.

// Introduction to the PHP switch statement //
When the value of a single variable determines the number of different choices, you can use the "if...elseif" statement.

Suppose that you're building a website whose users have many roles like admin, editor, author, and subscriber.

The following example uses the "if...elseif" statement to check the user role and display the appropriate message:
<?php
$role = 'subscriber';
$message = '';

if ($role === 'admin') {
    $message = 'You are an admin.';
} elseif ('editor' === $role) {
    $message = 'You are an editor.';
} elseif ('author' === $role) {
    $message = 'You are an author.';
} elseif ('subscriber' === $role) {
    $message = 'You are a subscriber.';
} else {
    $message = 'You are not authorized to access this page.';
}

echo $message;
// Output: You are a subscriber.
?>

When the value of a single variable specifies the number of different choices, it's much cleaner to use the "switch" statement like this:
<?php
$role = 'admin';
$message = '';

switch ($role) {
    case 'admin':
        $message = 'You are an admin.';
        break;
    case 'editor':
        $message = 'You are an editor.';
        break;
    case 'author':
        $message = 'You are an author.';
        break;
    case 'subscriber':
        $message = 'You are a subscriber.';
        break;
    default:
        $message = 'You are not authorized to access this page.';
    }
echo $message;
// Output: You are an admin.
?>

The following illustrates the syntax of the "switch" statement:
<?php
switch (condition/expression) {
    case value1:
        // code to execute if the expression is equal to value1
        break;
    case value2:
        // code to execute if the expression is equal to value2
        break;
    case value3:
        // code to execute if the expression is equal to value3
        break;
    default:
        // code to execute if the expression is not equal to any of the values
}
?>
The switch statement compares an expression with the value in each case.
If the expression equals a value in a case, e.g., value1, PHP executes the code block in the matching case until it encounters a "break" statement.
If there's no match and the "default" is available, PHP executes all statements following the "default" keyword.
In case the "default" is not specified, and there's no match, the control is passed to the statement that follows the "switch" statement.

The following flowchart illustrates how the "switch" statement works:
<img src="https://www.phptutorial.net/wp-content/uploads/2021/03/php-switch.png" alt="PHP switch statement flowchart">

// Combining multiple cases //
Since PHP executes the "switch" statement from the matching case label till it encounters the "break" statement,
you can combine several cases into one.

The following example uses the switch statement and combines the cases of 'editor' and 'author' into one:
<?php
$message = '';
$role = 'author';

switch ($role) {
    case 'admin':
        $message = 'You are an admin.';
        break;
    case 'editor':
    case 'author':
        $message = 'Welcome! Do you want to create a new article?';
        break;
    case 'subscriber':
        $message = 'You are a subscriber.';
        break;
    default:
        $message = 'You are not authorized to access this page.';
}
echo $message;
// Output: Welcome! Do you want to create a new article?
?>

// PHP switch statement's alternative syntax //
PHP also supports an alternative syntax for the "switch" statement as follows:
<?php
switch (condition/expression):
    case value1:
        // code to execute if the expression is equal to value1
        break;
    case value2:
        // code to execute if the expression is equal to value2
        break;
    default:
        // code to execute if the expression is not equal to any of the values
endswitch;
?>

The alternative syntax is suitable for mixing with the HTMl code.

// Summary //
 - Use PHP "switch" statement instead of series of "if" statements on the same condition/expression.
 - Use the "break" statement to stop the execution of the "switch" statement.
 - Use the "default" statement to execute a code block if the expression is not equal to any of the values.

-->