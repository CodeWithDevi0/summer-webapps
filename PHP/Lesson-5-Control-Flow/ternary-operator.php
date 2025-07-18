<!-- 

// PHP Ternary Operator //
in this lesson, you'll learn to use the PHP ternary operator to make the code shorter and more readable.

// Introduction to the PHP ternary operator //
The ternary operator is a shorthand for the "if...else" statement.
Instead of writing this:
<?php
if (condition/expression) {
    // code to execute if the condition is true
    $result = value1;
} else {
    // code to execute if the condition is false
    $result = value2;
}
?>
you can use the ternary operator like this:
<?php
$result = (condition/expression) ? value1 : value2;
?>

// How it works.
 - First, PHP evaluates the condition/expression. If it's true, the right-hand expression returns the value1; otherwise, it returns the value2.
 - Second, PHP assigns the result of the right-hand expression to the $result variable.

As you can see, by using the ternary operator, you can make the code more concise and readable.
// Note that the name ternary operator comes from the fact that this operator requires three operands: condition/expression, value1, and value2.

// PHP ternary operator example //
Suppose you want to display the login link if the user has not logged in and the logout link if the user has already logged in.
To do that, you can use the "if...else" statement like this:
<?php
$is_user_logged_in = false;
if ($is_user_logged_in) {
    $title = 'Logout';
} else {
    $title = 'Login';
}
?>
in this example, the $title will be 'login' because the $is_user_logged_in is false.
The cide us quite lengthy. And you can make it shorter by using the ternary operator:
<?php
$is_user_logged_in = false;
$title = $is_user_logged_in ? 'Logout' : 'Login';
echo $title;
// Output: Login
?>

If the line is too long, you can always break it down like this:
<?php
$is_user_logged_in = false;
$title = $is_user_logged_in 
                        ? 'Logout'
                        : 'Login';
echo $title;
// Output: Login
?>

// The shorthand ternary operator //
Starting from PHP 5.3, you can use the shorthand ternary operator like this:
<?php
$result = $initial ?: $default;
?>
In this syntax, PHP evaluates $initial in the boolean context. if $initial is true, PHP assigns the value of the $initial to the $result variable.
Otherwise, it assigns the $default to the $result variable.

The following example uses the shorthand ternary operator to assign the value of the $path to the $url if the $path is not empty.
If the $path is empty, the ternary operator assigns the literal string '/' to the $url variable:
<?php
$path = '/about';
$url = $path ?: '/';

echo $url;
// Output: /about
?>

// Chaining ternary operators //
Technically, you can chain ternary operators by using parentheses ().
Suppose you want to show various messages if the users are eligible and have enough credit.
The following example chains two operators:
<?php
$eligible = true;
$has_credit = false;

$message = $eligible
    ? $has_credit
        ? 'You are eligible and have enough credit.'
        : 'You are eligible but do not have enough credit.'
    : 'You are not eligible.';

echo $message;
// Output: You are not eligible.
?>
Most of the time, chaining multiple ternary operators makes the code more difficult to read.
In this case, it's better to use "if...else" or "if...elseif" statements.

// Summary //
 - The ternary operator (?:) is a shorthand for the "if...else" statement.
 - Do use the ternary operator when it makes your code more concise and more readable.
 - Use the shorthand ternary operator to assign a default value if the initial value is false.
 - Do not chain multiple ternary operators because it makes the code more difficult to read.

-->