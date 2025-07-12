<!-- 

// PHP Type Casting //
in this lesson, you'll learn about PHP type casting, which allows you to convert a value of one type to another.

// Introduction to the PHP Type Casting //
Type casting allows you to convert a value of one type to another. To cast a value, you use the following type-casting operators:
// Cast Operators                   //Conversion
(array)                             Array
(bool) or (boolean)                 Boolean
(int) or (integer)                  Integer
(object)                            Object
(float) or (double) or (real)       Float
(string)                            String
(unset) or (null)                   Null

// Cast to an integer //
To cast a value to an integer, you use the (int) type-casting operator.
The (int) operators casts a float to an integer. It'll round the result towards zero.
For example:
<?php
echo (int) 12.5; // 12
echo "<br>";
echo (int) 12.4; // 12
echo "<br>";
echo (int) 12.6; // 12
echo "<br>";
echo (int) -12.7; // -12

?>

Suppose you have a string and want to cast it as an integer:

<?php

$message = 'Hi';
$num = (int) $message;

echo $num; // 0
?>

The result may not be what you expected.
If a string is numeric or leading numeric, then the (int) will cast it to the corresponding integer value.
Otherwise, the (int) cast the string to 0.
For example:
<?php

$amount = (int) '100 USD';
echo $amount; // 100

?>

In this example, the (int) operator cast the string '100 USD' as an integer.
Note that the (int) operator casts null to 0.
For example:
<?php
$qty = null;
echo (int) $qty; // 0
?>

// Cast to a float //
To cast a value to a float, you use the (float) type-casting operator.
For example:
<?php
$amount = (float) 100;
echo $amount; // 100.0
?>

// Cast to a string //
To cast a value to a string, you use the (string) type-casting operator.
The following example uses the (string) operator to cast the number 100 to a string:
<?php
$amount = 100;
echo (string) $amount . " USD"; // 100 USD

?>

You don't need to use the (string) operator in this case because PHP has a feature called type juggling that implicitly
converts the integer to a string:
<?php
$amount = 100;
echo $amount . " USD"; // 100 USD
?>

The (string) operator converts the true value to the string "1" and the false value to the empty string "".
For example:
<?php
$is_user_logged_in = true;
echo (string) $is_user_logged_in; // 1
?>

The (string) operator converts the null value to the empty string "".
The (string) cast an array to the "Array" string.
For example:
<?php
$numbers = [1, 2, 3];
$str = (string) $numbers;

echo $str; // Array
?>

And you'll get a warning that you're tempting to convert an array to a string.
"Warning: Array to string conversion in ..."

// Summary //
 - PHP type casting allows you to convert a value from one type to another.
 - Use a type-casting operator to cast a value to the desired type.

-->