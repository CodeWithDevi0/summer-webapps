<!-- 
 
// PHP If Statement //
in this lesson, you'll learn about the PHP if statement and how to use it to execute a code block conditionally.

// Introduction to the PHP if statement //
The "if" statement allows you to execute a statement if an expression evaluates to true. The following shows the syntax of the "if" statement:
<?php
if (condition/expression) {
    // code to execute if the condition is true
    statement;
}
?>
in this syntax, PHP evaluates the condition/expression first. If the condition/expression evaluates to true, PHP executes the statement.
In case the condition/expression evaluates to false, PHP skips the statement.

The following flowchart illustrates how the "if" statement works:
<img src="https://www.phptutorial.net/wp-content/uploads/2021/03/php-if.png" alt="PHP if statement flowchart">

The following example uses the "if" statement to display a message if the $is_admin variable is true:
<?php
$is_admin = true;
if ($is_admin) {
    echo "You are an administrator";
}
?>
Since the $is_admin variable is true, the code block is executed and the message "You are an administrator" is displayed.

// Curly braces {} //
If you want to execute multiple statements in the "if" block, you can use curly braces {} to group the statements.
<?php
$is_admin = true;
$can_edit = false;
if ($is_admin) {
    echo "You are an administrator";
    echo "You have access to the admin panel";
    $can_edit = true;
    // more statements
}
?>
In this example, the code block is executed and the message "You are an administrator" and "You have access to the admin panel" are displayed.
The $can_edit variable is also set to true.

// Nesting if statements //
It's possible to nest an "if" statement inside another "if" statement.
<?php
$is_admin = true;
$can_approve = false;
if ($is_admin) {
    echo "You are an administrator";
    $can_approve = true;
    if ($can_approve) {
        echo "You can approve content";
    }
}
?>

// Embedded if statements in HTML //
To embed an "if" statement in an HTML document, you can use the above syntax. However, PHP provides a better syntax that allows you to mix
the if statement with HTML code nicely.
<?php if (expression) : ?>
// HTML code here
<?php endif; ?>

The following exanple uses the "if" statement that shows the edit link if the $is_admin is true:
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The if statement in HTML</title>
</head>
<body>
    <?php $is_admin = true; ?>
    <?php if ($is_admin) : ?>
        <a href="edit.php">Edit</a>
    <?php endif; ?>
    <a href="view.php">View</a>
</body>
</html>
Since the $is_admin is true, the script shows the Edit link. If you change the value of the $is_admin to false,
you won't see the Edit link in the output.

// A common mistake with the PHP if statement //
A common mistake that you may make is to use the wrong operator in the "if" statement.
For example:
<?php
$checked = 'on';
if ($checked = 'off') {
    echo "The checkbox has not been checked";
}
?>
In this example, the script will display the message "The checkbox has not been checked" even if the $checked variable is not 'off'.
The reason is that the assignment operator (=) is used instead of the equality operator (==).
The assignment operator (=) assigns the value of the right operand to the left operand and returns the value of the left operand.
To fix this, you should use the equality operator (==):
<?php
$checked = 'on';
if ('off' == $checked) {
    echo "The checkbox has not been checked";
}
?>

If you accidentally use the assignment operator (=), PHP will raise a syntax error instead:
?php
$checked = 'on';
if ('off' = $checked) {
    echo "The checkbox has not been checked";
}
?php
// Parse error: syntax error, unexpected '=' ...

// Summary //
 - The "if" statement allows you to execute a statement if a condition/expression evaluates to true.
 - Always use curly braces {} even if you have a single statement to execute in the "if" statement.
 It makes the code more obvious.
 - Use the pattern "if (value == $variable_name)" to avoid possible mistakes.


-->