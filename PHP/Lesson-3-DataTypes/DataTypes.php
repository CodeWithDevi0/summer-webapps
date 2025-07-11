<!-- 

// PHP Data Types //
in this lesson, you'll learn about PHP data types including scalar types, compound types, and special types.

Introduction to PHP data types

A type specifies the amount of memory allocated to a value associated with it.
A type also determines the operations that you can perform on it.

PHP has ten primitive types including four scalar types, four compound types, and two special types:

PHP Types:

Scalar Types: "Boolean", "Integer", "Float", "String"
Compound Types: "Array", "Object"
Special Types: "Resource", "NULL"

Scalar Types
A variable is a scalar when it holds a single value of the type integer, string, float, or boolean.

// Integer //
Integers are whole numbers defined in the set {... -3, -2, 1, 0, 1, 2, 3, ...}.
The size of the integer depends on the platform where PHP runs.

The constant PHP_INT_SIZE specifies the size of the integer on a specific platform.
PHP uses the "int" keyword to denote the integer type.

The following example illustrates some integers:

<?php
$count = 0;
$max = 1000;
$page_size = 10;

echo $count;
echo $max;
echo $page_size;
?>

// Float //
Floats are floating-point numbers, which are also known as floats, doubles, or real numbers.

PHP uses IEEE 754 double format to represent floats, which, like other programming languages, have limited precision.

PHP uses the "float" keyword to represent the floating-point numbers. The following example illustrates the floating-point numbers in PHP:

<?php
$price = 10.25;
$tax = 0.08;

echo $price * (1 + $tax);
?>

// Boolean //
Boolean represents a truth value that can be either true or false.
PHP uses the "bool" keyword to represent the boolean type.

The bool type has two values true and false. Since keywords are case-insensitive, you can use true, True, TRUE, false, False, and FALSE.

The following example illustrates the boolean type in PHP:

<?php
$is_valid = true;
$is_admin = false;

echo $is_valid;
echo $is_admin;
?>

When you use the values of other types in the boolean context, such as if-else and switch-case statements,
PHP converts them to the boolean values.

PHP treats the following values as false:
 - The false keyword
 - The integer 0 and -0 (Zero)
 - The float 0.0 and -0.0 (Zero)
 - The empty string ("", '') and the string "0"
 - The empty array (array() or [])
 - The null value
 - The SimpleXML objects created from attributeless empty elements
 The values that are not one of these falsy values above are true.

// String //
A string is a sequence of characters surrounded by single quotes ('') or double quotes ("").
For example:

<?php
$firstname = "John";
$lastname = 'Doe';

$message = "Hello, $lastname" . " " . $firstname;
echo $message;
?>

// Compound Types //
Compound data includes values that contain more than one value. PHP has two compound types: array and object.

// Array //
An array is an ordered map that associates keys with values. For example: you can define a list of items in a shopping cart.
<?php
$cart = array(
    "apple",
    "banana",
    "orange"
);

$car = ["Lamborghini", "Ferrari", "Porsche"];

echo $cart[0];
echo $cart[1];
echo $cart[2];

echo $car[0];
echo $car[1];
echo $car[2];
?>
To access a value in an array, you use the square brackets [] and the index of the value you want to access.

The $carts array contains three string values. It maps the index 0, 1, and 2 to the values "apple", "banana", and "orange".
The $carts is called an "indexed array" because it uses numeric indexes as keys.

Besides numeric indexes, you can use strings as keys for the array elements.
These arrays are known as "associative arrays" because they map a string key to a value.
For example:
<?php

$prices = [
   'laptop' => 1000,
   'mouse' => 50,
   'keyboard' => 120
];

echo $prices['laptop'] . "<br>"; // 1000
echo $prices['mouse'] . "<br>"; // 50
echo $prices['keyboard'] . "<br>"; // 120

?>

// Object //
An object is an instance of a class. It's a central concept in object-oriented programming (OOP).

An object has properties. For example: a persion object may have a first name, last name, and age, properties.

An object also has behaviors, which are known as "Methods". For example: a person object can have a method called getFullName()
that returns the full name of the person.

// Special Types //
PHP has two special types: resource and null.

// NULL //
The null type has only one value: null that represents a variable with no value.

// Resource //
A resource is a special variable that references to an external resource such as:
 - A file
 - A database connection
 - A network connection

A resource isn't actual data like a string or number. Instead, it's a reference to something outside of PHP.
PHP uses resources to manage things outside of PHP efficiently by automatically free it when it is no longer in use.

// Summary //
 - PHP has four scalar types, four compound types, and two special types
 - Scalar types: integer, float, string, and boolean
 - Compound types: array and object
 - Special types: null and resource


-->