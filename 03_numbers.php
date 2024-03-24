<?php

// Declare numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations

echo 'Hello' . '<br>';
//
//echo $a + $b . '<br>';;
//echo $a - $b . '<br>';;
//echo $a * $b . '<br>';
//echo $a / $b . '<br>';
//echo $a % $b . '<br>';
//echo $a + $b * 10  / $c. '<br>';
//echo $a + $b * 10  / $c + 2 . '<br>';

// Assignment with math operators, you need uncomment one by one line to test
//$a += $b; echo $a.'<br>'; // $a = 9
//$a -= $b; echo $a.'<br>'; // $a = 1
//$a *= $b; echo $a.'<br>'; // $a = 20
//$a /= $b; echo $a.'<br>'; // $a = 1.25
//$a %= $b; echo $a.'<br>'; // $a = 1

// Increment operator
//echo $a++; // in this line the first print $a and then increase $a = 5
//echo $a; // in this line $a = 6

//echo ++$a; // in this line first increase $a and then print $a = 6
//echo $a; // in this line $a = 6

// Decrement operator
//echo $a--; // in this line the first print $a and then decries $a = 5
//echo $a; // in this line $a = 4

//echo --$a; // in this line first decries $a and then print $a = 4
//echo $a; // in this line $a = 4

// Number checking functions
//var_dump(is_float(4.1));
//var_dump(is_integer(4.1));
//var_dump(is_numeric('4test.1')); // check if forwarded value is number inside string

// Conversion
//$strNumber = '12.32';
//ONE WAY
//$number = (float)$strNumber;
//SECOND WAY
//$number = floatval($strNumber);
//var_dump($number);
//var_dump((int)$strNumber);
//var_dump((bool)$strNumber);
//var_dump((bool)''); //false
//var_dump((bool)null); //false

// Number functions
echo "abs(-15) " . abs(-15) . '<br>';
echo "pow(2, 3) " . pow(2, 3) . '<br>';
echo "sqrt(16) " . sqrt(16) . '<br>';
echo "max(2, 3) " . max(2, 3) . '<br>';
echo "min(2, 3) " . min(2, 3) . '<br>';
echo "round(2.4) " . round(2.4) . '<br>';
echo "round(2.6) " . round(2.6) . '<br>';
echo "floor(2.6) " . floor(2.6) . '<br>';
echo "ceil(2.4) " . ceil(2.4) . '<br>';

// Formatting numbers
$number = 12345657.12345;
echo number_format($number, 3, '.', '.') . '<br>';

//https://www.php.net/manual/en/ref.math