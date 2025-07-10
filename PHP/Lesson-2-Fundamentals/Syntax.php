<!-- 
in this tutorial, you'll learn about the basic syntax of PHP, including case sensitivity,
statements, and whitespaces.

As a programming language, PHP has its own syntax on how you write your code/program.

PHP Code

like HTML, you need to have the opening tag to start PHP code.
<?php
// PHP code goes here

//if you mix PHP code with html, you need to have the closing tag to end PHP code.
?>
-->
<!-- for example: -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1><?php echo "PHP Syntax"; ?></H1>
</body>
</html>

<!-- 
However, if a file contains only PHP code, the end closing tag is optional.
<?php
// PHP code goes here
?>

Case Sensitivity

Php is partially case-sensitive. Knowing what is case-sensitive and what is not is very important
to avoid syntax errors.

If you have a function such as count, you can use it as COUNT. It would work properly.

The following are case-insensitive in PHP:

    - PHP constructs such as if, for, while, switch, etc.
    - User-defined functions
    - Classes
    - Keywords such as true, false, null, etc.
    - Constants such as __LINE__, __FILE__, __DIR__, etc. (but not __line__, __file__, __dir__)

on the other hand, the following are case-sensitive:

    - Variables (e.g. $var, $VAR, $vAR, $message, $MESSAGE)

Statements
a PHP script typically consists of one or more statements. A statement is a code that does something,
such as assigning a value to a variable or calling a function.

A statement always ends with a semicolon (;). The following shows a statement that assigns a literal
string to the $message variable:

<?php
$message = "Hello World";
?>

The above example is a simple statement. PHP also has a compound statement comprising one or more simple
statements. A compound statement uses curly braces to make a block of code. For example:

<?php
if ($is_new_user) {
    $message = "Welcome to our website!";
} else {
    $message = "Welcome back!";
}
?>

You don't need to place the semicolon at the end of the statement( } ).
The closing tag of a PHP block ( ?> ) automatically implies a semicolon ( ; ).
Therefore, you don't need to place a semicolon in the last statement in a PHP block.

<?php echo $name ?>

In this example, the statement echo $name doesn't need a semicolon. However, using a semicolon
for the last statement in a block should work fine as well.

<?php echo $name; ?>

Whitespace and Line Breaks
In most cases, whitespace and line breaks don't have special meaning in PHP.
Therefore, you can place a statement in one line or span it across multiple lines.
For example the following code snippets are equivalent:

login($username, $password);

and:

login(
    $username,
    $password
);

Summary
 - PHP is partially case-sensitive.
 - PHP constructs, function names, and class names are case-insensitive.
 Whereas variables are case-sensitive.
 - A statement always ends with a semicolon (;).
 - Whitespace and line breaks don't have special meaning in PHP. 
 However, you should use whitespace and line breaks to make your code more readable.




-->