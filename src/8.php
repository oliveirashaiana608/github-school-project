<?php
// Define an array with some numbers
$numbers = array(1, 2, 3, 4, 5);

// Loop through the array and double each number
foreach ($numbers as &$number) {
    $number *= 2;
}

// Print out the new array with the doubled numbers
print_r($numbers);
?>