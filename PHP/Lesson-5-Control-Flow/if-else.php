<!-- 

// PHP If-Else Statement //
in this lessson, you'll learn about the PHP "if...else" statement that executes a code block when a condition is true or
another code block when the condition is false.

// Introduction to the PHP if-else statement //
The "if" statement allows you to execute a one or more statements when an condition/expression is true like on the previous lesson.

Sometimes, you want to execute another code block if the expression is false. To do that, you add the "else" clause to the "if" statement:
<?php
if (condition/expression) {
    // code to execute if the condition is true
} else {
    // code to execute if the condition is false
}
?>
in this syntax, if the condition/expression evaluates to true, PHP executes the code block in the "if" clause.
If the condition/expression evaluates to false, PHP executes the code block in the "else" clause.

The following flowchart illustrates how the "if-else" statement works:
<img src="https://www.phptutorial.net/wp-content/uploads/2021/03/php-if-else.png" alt="PHP if-else statement flowchart">

The following example uses the "if-else" statement to show a message based on the value of the $is_authenticated variable:
<?php
$is_authenticated = false;
if ($is_authenticated) {
    echo "You are logged in";
} else {
    echo "You are not authorized to access this page";
}
?>
// Output: You are not authorized to access this page

// PHP if-else statement in HTML //
Like the "if" statement, you can mix the "if-else" statement with HTML code nicely using the alternative syntax:
<?php if (expression) : ?>
// Show HTML code when the expression is true
<?php else : ?>
// Show HTML code when the expression is false
<?php endif; ?>
Note that you don't need to place a semicolon (;) after the "endif" keyword because the "endif" is the last statement in the PHP block.
The enclosing tag "?>" automatically implies a semicolon.

The following example uses the "if-else" statement to show the logout link if $is_authenticated is true. If the $is_authenticated is false,
the script shows the login link instead:
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP if-else Statement Demo</title>
</head>
<body>
<?php $is_authenticated = true; ?>
  <?php if ($is_authenticated) : ?>
  <a href="#">Logout</a>
  <?php else: ?>
  <a href="#">Login</a> 
  <?php endif ?>
</body>
</html>

// Summary //
 - Use the PHP "if-else" statement to execute a code block when a condition is true.
 - Use the alternative syntax to mix the "if-else" statement with HTML code.

-->