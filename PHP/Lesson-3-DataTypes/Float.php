<!-- 

// PHP Float //
in this lesson, you'll learn about floating-point numbers or floats in PHP.

Introduction to the PHP float
Floating-point numbers represents numeric values with decimal digits.
Floating-point numbers are often called floats, doubles, or real numbers. Like integers, the range of the floats depends on the platform
where PHP runs.

PHP recognizes floating-point numbers in the following formats:
// 1.25
// 3.14
// -0.1

PHP also supprts the floating-point numbers in scientific notation:
// 1.25e3
// 3.14E-1
// 0.125 * 10^1 or 1.25

Since PHP 7.4, you can use the underscore (_) to make long numbers more readable:
<?php
1_250_000
?>

// Floating-point number accuracy //
Since the computer cannot represent exact floating-point numbers, it can only use approximate representations.
For example, the result of 0.1 + 0.1 + 0.1 is 0.29999999..., not 0.3. When comparing two floating-point numbers using the == operator,
you must be careful.

The following example returns false, which may not be what you expected:
<?php
$total = 0.1 + 0.1 + 0.1;
echo $total == 0.3; // returns false

?>

// Test a float value //
To check if a value is floating-point number, you use the "is_float()" or "is_real()"function. The "is_float()" returns true if its argument
is a floating-point number; otherwise, it returns false. For example:

<?php
echo is_float(0.5); // returns 1
?>

// Summary //
 - Floating-point numbers are numbers with decimal points. Floating-point numbers are also known as floats.
 - PHP can only represent floats approximately, not precisely.
 - You can use the "is_float()" or "is_real()" function to check if a value is a float.

-->