<!-- 
 
// String PHP //
in this lesson, you'll learn about PHP strings and how to manipulate strings effectively.

// Introduction to the PHP string //
In PHP, a string is a sequence of characters. PHP provides four ways to define a literal string: single quoted, double quoted,
heredoc, and nowdoc. This lesson focuses on the single quoted and double quoted strings.

To define a string, you wrap the text within single quotes like this:
<?php
$title = 'PHP Tutorial';
echo $title;
?>

Or you can use double quotes to define a string:
<?php
$title = "PHP Tutorial";
echo $title;
?>

However, you cannot start a string with a single quote and end it with a double quote and vice versa. The quotes must be consistent.
Suppose you have a variable $name.
<?php
$name = 'John';

// and you want to show a message that displays the following: 
// "Hello, John"

// to do it you can use the concatenate operator (.) to concatenate two strings:

echo "Hello, $name";

// When evaluating a double-quoted string, PHP replaces the value of any variable that you place inside the string.
// This feature is called variable interpolation in PHP.
// you can use the curly braces to interpolate the variable to make it more readable:
echo "Hello, {$name}";
?>


Note that PHP doesn't substitute the value of variables in the single-quoted string, for example:
<?php
$name = 'John';
echo 'Hello, $name';
?>
// output: Hello, $name

Besides substituting the variables, the double-quoted strings also accept special characters, e.g., \n, \r, \t by escaping them.
Using single-quoted strings is a good practice when you don't need to use variable interpolation because PHP doesn't have to parse
and evaluate them for double-quoted strings.

// Accessing characters in a string //
A string has a zero-based index. It means that the first character has an index of 0. The second character has an index of 1, and so on.

To access a single character in a string at a specific position, you use the following syntax:
// $string[$index]
For example:
<?php
$name = 'John';
echo $name[0]; // output: J
?>

// Getting the length of a string //
To get the length of a string, you use a built-in function called strlen(), For example:
<?php
$name = 'John';
echo strlen($name); // output: 4
?>

// Summary //
 - A string is a sequence of characters surrounded by single or double quotes.
 - PHP substitutes variables embedded in a double-quoted string.
 - A string is a zero-based index. Therefore, you can access a character at a specific position in a string using the square bracket [].
 - use the strlen() function to get the length of a string.

// other string functions //
 - use the str_word_count() function to count the number of words in a string.
 - use the strrev() function to reverse a string.
 - use the strpos() function to find the position of the first occurrence of a substring in a string.
 - use the str_replace() function to replace a substring in a string.
 - use the str_repeat() function to repeat a string.
 - use the str_split() function to split a string into an array.
 - use the str_shuffle() function to shuffle the characters in a string.

-->