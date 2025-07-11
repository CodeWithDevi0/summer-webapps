<!-- 

// Heredoc in PHP //
in this lesson, you'll learn how to use PHP heredoc and nowdoc to improve the readability of your code.

// Introduction to the PHP heredoc string //
When you place variables in a double-quoted string, PHP will expand the variable names. If a string contains the double quotes (""),
you need to escape them using the backslash (\).
For example:
<?php
$he = "John";
$she = "Jane";

$text = "$she said, \"PHP is awesome\".
\"Of course.\" $he agreed.";

echo $text;

?>
// output: Jane said, "PHP is awesome".
// "Of course." John agreed.

PHP heredoc strings behave like double-quoted strings without the double quotes. It means that they don't need to escape quotes and expand variables.
For example:
<?php
$he = "John";
$she = "Jane";

$text = <<<Text
$she said, "PHP is awesome".
"Of course." $he agreed.
Text;

echo $text;
?>
// output: Jane said, "PHP is awesome".
// "Of course." John agreed.

// PHP heredoc syntax //
The following shows the syntax of the heredoc string:
<?php
$str = <<<Identifier
place a string message here
Identifier;

echo $str;
?>

How it works.
First, start with the "<<<" operator, and identifier, and a new line.
Second, specify the string, which can span multiple lines and include single quotes ('') and double quotes ("").
Third, close the string with the same identifier as the one used to start the string.
The identifier must contain only alphanumeric characters and underscores and start with an underscore or a non-digit character.

The closing identifier must follow these rules:
    - Begins at the first column of the line
    - Contains no other characters except a semicolon (;)
    - The character before and after the closing identifier must be a newline character defined by the local operating system.

The following shows an invalid heredoc string because the character before it is not a newline character:
?php

$str = <<<IDENTIFIER
// invalid
    IDENTIFIER;

echo $str;
?>

However, the following is a valid heredoc string:
<?php
$str = <<<IDENTIFIER
valid
IDENTIFIER;
?>

// PHP heredoc strings' use cases //
In practice, you use the heredoc syntax to define a string that contains a single quote, double quote, or a variable.
The heredoc string makes the string easier to read.
Also, you can use a heredoc string to generate HTML dynamically.
For example:
<?php
$title = "my site";

$header = <<<HEADER
<header>
    <h1>$title</h1>
</header>
HEADER;

echo $header;
?>

// PHP nowdoc syntax //
The nowdoc is similar to the heredoc, but it doesn't expand variables.
Here's the syntax of the nowdoc:
<?php
$str = <<<'STR'
    This is a string
    that contains a single quote (')
    and a double quote (").
STR;

echo $str;
?>

The nowdoc's syntax is similar to the heredoc's syntax, except that the identifier that follows the "<<<" operator is enclosed in single quotes ('').
The nowdoc's indentifier also follows the same rules as the heredoc's identifier.

// Summary //
 - Heredoc strings are like double-quoted strings without escaping.
 - Nowdoc strings are like single-quoted strings without escaping.
 - The nowdoc is similar to the heredoc, but it doesn't expand variables.
 - The heredoc is more flexible than the nowdoc because it can contain variables.

-->