<!-- 
 
// PHP Integer //
in this lesson, you'll learn about the PHP int type representing integers in PHP.

Introduction to the PHP int type
Integers are whole numbers such as -3, -2, -1, 0, 1, 2, 3, etc. PHP uses the "int" type to represent integers.

The range of integers depends on the platform where PHP runs. Typically, integers has a range of -2,147,483,648 to 2,147,483,647.
It's equivalent to 32 bits signed.

To get the size of the integer, you use the PHP_INT_SIZE constant. Also, you use the PHP_INT_MIN and PHP_INT_MAX constants
to get the minimum and maximum values of the integer values.

PHP represents integer literals in decimal, octal, binary, and hexadecimal formats.

// Decimal numbers //
PHP uses a sequence of digits without leading zeros to represent decimal values.
The sequence may begin with a plus or minus sign. If it has no sign, then the integer is positive.
For example:
// 2000
// -100
// 12345

From PHP 7.4, you can use the underscore (_) to group digits in an integer to make it easier to read.
For example, instead of using the following number:
// 1234567890
You can use the following number:
// 1_234_567_890
The underscore is ignored by PHP.
The following example shows how to use the underscore to group digits in an integer:
// 1234567890

// Octal numbers //
Octal numbers consist of a leading zero and a sequence of digits from 0 to 7.
like decimal numbers, octal numbers can have a plus (+) or minus (-) sign.
For example:
// +010  // decimal 8
// -010  // decimal -8

// Hexadecimal numbers //
Hexadecimal numbers consist of a leading 0x and a sequence of digits (0-9) and letters (a-f) or (A-F) The letters can be in lowercase or uppercase.
By convention, letters are written in uppercase.

Like decimal numbers, hexadecimal numbers can include a sign, plus (+) or minus (-).
For example:
// 0x10  // decimal 16
// 0xFF  // decimal 255

// Binary numbers //
Binary numbers begin with 0b are followed by a sequence of digits (0 or 1).
The binary numbers can include a sign.
For example:
// 0b10  // decimal 2

// The is_int() function //
The "is_int()" built-in function returns true if a value (or a variable) is an integer.
Otherwise, it returns false.
For example:
<?php
$amount = 100;
echo is_int($amount);
?>
// Output:
// 1


// Summary //
 - Integers are whole numbers such as -3, -2, -1, 0, 1, 2, 3, etc. PHP uses the "int" type to represent integers.
 - Use the PHP_INT_SIZE constant to get the size of the integer.
 - Use the PHP_INT_MIN and PHP_INT_MAX constants to get the minimum and maximum values of the integer values.
 - Literal integers can be in decimal, octal, binary, and hexadecimal formats.
 - Use the is_int() function to check if a value (or a variable) is an integer.

 
-->