<!-- 

PHP Constants

in this lesson we will learn about constants and how to use the define() function
and const keyword to define constants in php.

Introduction to PHP Constants 

A constant is simple a name that holds a single value. As its name implies, the value of a constant
cannot be changed during the execution of the PHP script.

To define a constant you use the define() function. The define() function takes the constant's
name as the first argument and the constant value as the second. For example:

<?php
define("PI", 3.14);
echo PI;
?>

By convention, the constant names are uppdercase. Unlike a variable, the constantn name doesn't
start with a dollar sign ($).

By default, constant names are case-sensitive. It means that "PI" and "pi" are different constants.
// It's possible to define a constant that is case-insensitive. However, it's been deprecated
// since PHP 7.3

In PHP 5, a constant can hold a simple value like a number, a string, or a boolean value. From 7.0,
a constant can hold an array, For example:

<?php
define("ORIGIN", [0, 0]);
?>
Like superglobal variables, you can access constants from anywhere in the script.

The const Keyword
PHP provides you with another way to define a constant via the "const" keyword.
Here's the syntax:

< ?php
const CONSTANT_NAME = value;
? >

In this syntax, you define the constant name after the const keyword. You use the
assignment operator (=) to assign the constant value. The constant value can be scalar, e.g.,
a number, a string, or an array.

The following example uses the const keyword to define the SALES_TAX constant:

<?php 
const SALES_TAX = 0.085;

$gross_price = 100;

$net_price = $gross_price * (1 + SALES_TAX);

echo $net_price; // 108.5
//The const keyword is preferred over the define() function because it's more readable and concise.

?>

The following example uses the const keyword to define the RGB constant that holds an array:

<?php
const RGB = [255, 255, 255];
const RGB2 = ['red', 'green', 'blue'];
?>

define and const

First, the define() is a function while the const is a language construct.
It means that the define() function defines a constant at run-time, whereas the const keyword
defines a constant at compile-time.

In other words, you can use the define() function to define a constant conditionally like this:

<?php
if (condition) {
    define("CONSTANT_NAME", value);
}
?>

However, you cannot use the const keyword to define a constant this way. For example,
the syntax of the following code is invalid:

<?php
if (condition) {
    //const CONSTANT_NAME = value; // this is invalid
}
?>

Second, the define() function allows you to define a constant with the name that comes from an
expression. For example, the following defines three constants: OPTION_1, OPTION_2, and OPTION_3
with the values 1, 2, and 3 respectively:

<?php
define('PREFIX', 'OPTION_');

define(PREFIX . '_1', 1);
define(PREFIX . '_2', 2);
define(PREFIX . '_3', 3);

echo OPTION_1; // 1
echo OPTION_2; // 2
echo OPTION_3; // 3

?>

However, you cannot use the const keyword to define a constant name derived from an expression.
Unless you want to define a constant conditionally or use an expression, you can use the const
keyword to define constants to clarify the code.

//Note that you can use the const keyword to define constants inside classes. For example:

Summary
 - A constant is a name that holds a simple value that cannot be changed during the execution
 of the script. From PHP 7, a constant can hold an array.
 - A constant can be accessed from anywhere in the script.
 - Use the define() function or const keyword to define a constant.
 - Use the define() function if you want to define a constant conditionally or using an expression.
 - Use the const keyword if you want to define a constant that
 is not conditionally or using an expression.


-->