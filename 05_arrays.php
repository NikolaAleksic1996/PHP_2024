<?php

// Create array
$fruits = ['Banana', 'Apple', 'Orange'];

// Print the whole array
echo '<pre>';                           // Print in formatted way
var_dump($fruits);
echo '</pre>';

// Get element by index
echo $fruits[0] . '<br>';               // Banana

// Set element by index
$fruits[0] = 'Peach';

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Check if array has element at index 2
echo '<pre>';
var_dump(isset($fruits[2]));             // bool(true)
echo '</pre>';

// Append element
$fruits[] = 'Mango';

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Print the length of the array
echo count($fruits) . '<br>';           // 4

// Add element at the end of the array
array_push($fruits, 'Strawberry'); // this function is equal to bellow
$fruits[] = 'Strawberry';

echo '<pre>';
var_dump($fruits);
echo '</pre>';
// Remove element from the end of the array

// Add element at the beginning of the array

// Remove element form the beginning of the array

