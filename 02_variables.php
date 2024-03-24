<?php

// We have 8 types of variables

// In PHP variables doesn't have a type, value has the type

/*
 * String
 * Integer
 * Float
 * Boolean
 * Null
 * Array
 * Object
 * Resource
 */

// Declare variable
$name = 'Nikola';
$age = 27;
$isMale = true;
$height = 1.75;
$salary = null;

// Print variable
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';

// Print type of the variables
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';

// Print the whole variable
var_dump($name, $age);
var_dump($isMale);

// Change the value of the variable
$name = 27;
echo gettype($name);

// Variable checking function

var_dump(is_string($name));  //false
var_dump(is_integer($name));  //true

// Check if variable is defined
var_dump(isset($address)); //false
var_dump(isset($name)); //true
var_dump(isset($salary)); //false because salary is NULL
//echo $address; // Undefined variable: address

// Constants
define('PI', 3.14);
echo PI;

var_dump(defined('PI')); //bool(true)
var_dump(defined('PI')); //bool(false)

// Using PHP build-in constants
echo PHP_INT_MAX;