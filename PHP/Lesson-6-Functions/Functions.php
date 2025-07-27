<!-- 

// PHP functions //
in this lesson, you'll learn about PHP function and how to define user-defined functions.

// What is a function? //
A function is a named block of code that performs a specific task.
So far, you've learned how to use built-in functions in PHP, such as var_dump() that dumps information about a variable.
In this lesson, you'll learn how to define your functions. These functions are called user-defined functions.

// Why do you need functions in the first place? //
Sometimes , you need to perform the same task multiple times in a script.
For example, suppose that you want to show a message that welcomes a user like this:
<?php
echo "Welcome to the website!";
?>

You can do this by using the echo statement multiple times.
However, this approach is not efficient.
Instead, you can define a function that displays the welcome message.
Then, you can call the function whenever you need to display the welcome message.

To define and call a user-defined function, you use the following steps:
First, define a function called welcome_message() that displays the welcome message like this:
<?php
function welcome_message() {
    echo "Welcome to the website!";
}
?>

The function is defined using the function keyword followed by the function name and a pair of parentheses.
Then, you call the welcome_message() function in any place where you want to show the welcome message like this:
<?php
welcome_message();
?>

The welcome_message() function is called using the function name followed by a pair of parentheses.
Later if you want a different message, you can change it centrally in the welcome_message() function instead of in multiple places.
Using a function, you can reuse a code block and make your script easier to maintain.

// Defining a function //
To define a function, you have to use the following syntax:
<?php
function function_name() {
    // statements
}
?>
in this syntax:
 - First, specify the function name followed by the "function" keyword.
 The function's name must start with a letter or underscore followed by zero or more letters, underscores, and digits.
 - Second, define one or more statements inside the function body.
 The function body starts with the "{" character and ends with the "}" character.

// Function parameters //
In the previous example, the welcome_message() function does not take any parameters.
However, you can define a function that takes parameters.
A parameter is a value that you pass to a function.
To define a function that takes parameters, you have to use the following syntax:
<?php
function function_name2($parameter1, $parameter2, $parameter3) {
    // statements
}
?>
Inside the function body, you can use the parameters like variables. Parameters are the local variables.
For example, if you want to welcome users by their usernames, you can add a "$username" parameter to the welcome_message() function like this:
<?php
function welcome_message2($username) {
    echo "Welcome, $username!";
    //or
    echo 'Welcome, ' . $username . '!';
}
?>
Now, you can call the welcome_message() function with a username like this:
<?php
welcome_message2("Admin!");
?>

// Parameters vs Arguments //
In the previous example, the $username is a parameter.
When you call the welcome_message2() function, you pass the value "Admin!" to the $username parameter.
In this case, the value "Admin!" is called an argument.

// Return values //
In the previous example, the welcome_message2() function does not return any value.
However, you can define a function that returns a value.
To define a function that returns a value, you have to use the following syntax:
<?php
function function_name3($parameter1, $parameter2, $parameter3) {
    return $parameter1 + $parameter2 + $parameter3;
}
?>
For example:
<?php
function welcome_user($username) {
    return "Welcome, $username!";
}
?>
Now, you can call the welcome_user() function and store the returned value in a variable like this:
<?php
$message = welcome_user("Admin!");
echo $message;
?>
or you can display the function's return value directly like this:
<?= welcome_user("Admin!"); ?>

// HTML code inside a function //
Typically, a function contains only PHP code. However, it's possible to define a function that contains HTML code.
The following "welcome()" function displays the welcome message wrap in a span tag:
<?php function welcome($username) { ?>
    <span>Welcome <?= $username; ?> </span>
<?php } ?>

// Summary //
 - A function is a named block of code that performs a specific task.
 - Do use functions to create reusable code.
 - Use the "return" statement to return a value from a function.
 - You can define a function that contains HTML code.


-->