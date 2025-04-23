<?php
// This is a simple PHP program that demonstrates basic usage of arrays and loops.
// The array 'students' contains an array of student names: ['Alice', 'Bob', 'Charlie', 'David', 'Eve'].

// Initialize an empty array to store the students' data.
$students = [];

// Add some sample data to the array
$students[] = 'Alice';
$students[] = 'Bob';
$students[] = 'Charlie';
$students[] = 'David';
$students[] = 'Eve';

// Loop through each student's name and print them out.
foreach ($students as $student) {
    echo $student . "<br>";
}
