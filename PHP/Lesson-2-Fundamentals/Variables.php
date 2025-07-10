<!-- 

PHP Variables
in this lesson, you'll learn about PHP variables, including how to declare and how to store data in them.

Defining a Variable

A variable is a container for storing data.
it stores a value of any type, e.g., a string, an integer, a float, a boolean, an array, an object.

A variable has a name and is associated with a value. To define a variable, you use the following syntax:

<?php
$name = "John";
?>

in the above example, $name is the variable name and "John" is the value associated with it.
When defining a variable, you need to following these rules:
 - The variable name must start with the dollar sign ($)
 - The first character after the dollar sign ($) must be a letter (a-z, A-Z) or an underscore (_)
 - The remaining characters can be letters, numbers, or underscores.

PHP is case-sensitive. It means that $message and $Message are two different variables.

The Following example defines a variable called $title:

<?php
$title = "PHP is awesome";
?>
In the above example, $title is the variable name and "PHP is awesome" is the value associated with it.

to display the value of variables on a webpage, you'll use the echo construct.
for example:
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <h1><?= $title; ?></h1>
</body>
</html>

<!-- 
If you open the webpage, you'll see the following output:

"PHP is awesome"

Another shorter way to show the value of a variable on a page is to use the following syntax:
<?= $title; ?>

The above syntax is equivalent to the following:
<?php echo $title; ?>

Mixing PHP code with HTML will make the code unmaintainable, especially when the application grows.
To avoid this, you can separate the code into separate files. For example:
 * index.php - store the login for defining and assigning value to variables
 * index.view.php - store the code that displays the variables.
 * Use the "require" function/construct to include the code from the index.view.php file in the
 index.php file.

// check the Variables folder for the index.php and index.view.php files

This separates the code responsible for logic from the code responsible for displaying the output/file.
In programming, this is called separation of concerns (SoC).

Summary 
 - A variable is a container for storing data, and its name starts with the dollar sign ($).
 - Use the separation of concerns (SoC) principle to separate the PHP logic from HTML.
 - Use the echo construct to display the value of a variable on a page.
 - Use the require construct to include the code from the index.view.php file in the index.php file.


-->