<!-- 

// PHP Boolean // 
in this lesson, you'll learn about the PHP boolean data type and the boolean values

Introduction to PHP Boolean
A boolean value represents a truth value. In other words, a boolean value can be either true or false.
PHP uses the "bool" keyword to represent the boolean values.

To represent boolean literals, you can use the true and false keywords.
These keywords are case-insensitive, so you can use True, TRUE, true, False, FALSE, and false.

When you use non-boolean values in a boolean context, e.g., if-else and switch-case statements, PHP converts them to the boolean values.
PHP treats the following values as false:
 - The false keyword
 - The integer 0 and -0 (Zero)
 - The float 0.0 and -0.0 (Zero)
 - The empty string ("", '') and the string "0"
 - The empty array (array() or [])
 - The null value
 - The SimpleXML objects created from attributeless empty elements
 The values that are not one of these falsy values above are true.

The following shows how to declare variables that hold boolean values:
<?php 
$is_valid = true;
$is_admin = false;
?>

To check if a value is a boolean, you can use the built-in function "is_bool()":
<?php 
$is_email_valid = false;
echo is_bool($is_email_valid);    
?>

When you use the "echo" to show a boolean value, it'll show 1 for true and nothing for false.
To make it more obvious, you can use the "var_dump()" function:
<?php 
$is_email_valid = false;
var_dump($is_email_valid);
$is_submitted = true;
var_dump($is_submitted);
?>
// Output:
// bool(false)
// bool(true)

The "var_dump()" function shows the type and value of the variable.

// Summary //
 - A boolean value represents a truth value, which is either true or false
 - PHP evaluates the following values to false: false, 0, 0.0, empty string, (""), "0", NULL, an empty array, and an empty SimpleXML object

-->