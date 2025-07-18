<!-- 

// PHP foreach loop //
in this lesson, you'll learn how to use PHP "foreach" statement to loop over elements of an array.

// Introduction to the PHP foreach loop //
PHP provides you with the "foreach" statement that allows you to iterate over elements of an array, either an indexed array or an associative array.

The "foreach" statement iterates over all elements in an array, one at a time.
It starts with the first element and ends with the last one. Therefore, you don't need to know the number of elements in an array upfront.

The following flowchart illustrates how the "foreach" statement works:
<img src="https://www.phptutorial.net/wp-content/uploads/2021/03/php-foreach.png" alt="PHP foreach loop flowchart">

// PHP foreach with indexed array //
To iterate over all elements of an indexed array, you use the following syntax:
<?php
foreach ($array_name as $element) {
    // code to execute
}
?>

When PHP encounters a "foreach" statement, it assigns the first element of the array to the variable following the "as" keyword ($element).
In each iteration, PHP assigns the next array element to the $element variable.
If PHP reaches the last element, the loop ends.

The following exampl uses the "foreach" statement to display elements of the $colors array:
<?php
$colors = ['red', 'green', 'blue', 'yellow'];
foreach ($colors as $color) {
    echo $color . '<br>';
}
// Output:
// red
// green
// blue
// yellow
?>

// PHP foreach with associative array //
To iterate over elememnts of an associative array, you use the following syntax:
<?php
foreach ($array_name as $key => $element) {
    // code to execute
    // process element here
}
?>
When PHP encounters the "foreach" statement, it accesses the first element and assigns:
 - The key of element to the $key variable.
 - The value of the element to the $element variable.

In each iteration, PHP assigns the key and value of the next element to the variables ($key and $element) that follows the "as" keyword.
If the last element is reached, PHP ends the loop.

The following example illustrates how to use the "foreach" statement to iterate over elements of the capital cities array:
<?php
$capitals = [
    'Vietnam' => 'Hanoi',
    'France' => 'Paris',
    'Italy' => 'Rome',
    'Japan' => 'Tokyo',
];
foreach ($capitals as $country => $capital) {
    echo "The capital of $country is $capital<br>";
}
// Output:
// The capital of Vietnam is Hanoi
// The capital of France is Paris
// The capital of Italy is Rome
// The capital of Japan is Tokyo
?>

// Summary //
 - Use the "foreach($array_name as $value/element) to iterate over elements of an indexed array.
 - Use the "foreach($array_name as $key => $value/element) to iterate over elements of an associative array.
-->