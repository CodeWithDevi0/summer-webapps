<!-- 

PHP Comments 

in this lesson, you'll learn how to use PHP comments to document your code.

Comments are important parts of the code. Comments provide useful information that will help you
and other developers understand the meaning of the code more quickly later.

PHP supports two types of comments:
 - One-line comments
 - Multi-line comments

One-line comments

The one-line comment is placed at the end of the line or at the current block.

A one-line comment starts with the pound sign (#) or the double forward slash (//).
The rest of the text after the (//) or (#) is ignored by the PHP interpreter.
For example:

<?php
// This is a one-line comment
# This is also a one-line comment

$rate = 100; # Hourly rate
$hours = 143; # Hours worked
$payout = $hours * $rate; // $payout = 14300
?>

Multi-line comments
A multi-line comment starts with /* and ends with */. For example:

<?php
/*
This is a multi-line comment
haplas to you
*/
?>

Writing meaningful comments
To document your code effectively, you use the following guidelines:
1) Making the code speak for itself without using comments by naming meaningful identifiers.
For example:
<?php
$ic = true; 
?>

Instead of cryptic name with a comment:
<?php
$ic = true; // Is the user an admin?
?>
The code itself can be a good comment.

2) Don't write a comment to explain what code does, instead, explain why it does so. For example:
<?php
// complete the task
$is_completed = true;
?>

3) Writing a comment, make it as concise as possible.

Summary
 - Comments are important parts of the code because they explain why code does what it is supposed
 to do.
 - PHP supports both one-line and multi-line comments.
 - A one-line comment starts with the pound sign (#) or the double forward slash (//).
 - A multi-line comment starts with /* and ends with */.
 - Use meaningful identifiers to make the code speak for itself.

 
-->