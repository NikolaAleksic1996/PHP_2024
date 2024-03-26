<?php

// Create simple string
/*
The difference between single and double quotes is tha
 - in double quotes I can put variable name and take variable value
 - in single quotes I can put variable name but can't take value
*/

//$name = "nikola";
//$hello = "Hello $name";  // Hello nikola
//$hello1 = 'Hello $name'; // Hello $name
//echo $hello . '<br>';
//echo $hello1 . '<br>';

// String concatenation
$string = "   Žello đak  " . ' nikolać     '; // Hello nikola
$string1 = "   Žello đak  " . ' Nikolać     '; // Hello nikola
//echo $string . '<br>';
// PHP_EOL is "\n": string only in view page source set content after this word in the new line but on the page
// in browser nothing happen
echo "1 - " . strlen($string) . '<br>' . PHP_EOL;
echo "2 - " . trim($string) . '<br>' . PHP_EOL;
echo "3 - " . ltrim($string) . '<br>' . PHP_EOL;
echo "4 - " . rtrim($string) . '<br>' . PHP_EOL;
echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL;                   // 3
echo "6 - " . strrev($string) . '<br>' . PHP_EOL;                           // ��alokin ka�� olle��
echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL;                       // ŽELLO đAK NIKOLAć
echo "8 - " . mb_strtoupper($string, 'UTF-8') . '<br>' . PHP_EOL; // ŽELLO ĐAK NIKOLAĆ
echo "9 - " . strtolower($string) . '<br>' . PHP_EOL;                      // Žello đak nikolać
echo "10 - " . mb_strtolower($string) . '<br>' . PHP_EOL;                  // žello đak nikolać
echo "11 - " . ucfirst($string) . '<br>' . PHP_EOL;                        // Žello đak nikolać
echo "12 - " . lcfirst($string) . '<br>' . PHP_EOL;                        // Žello đak nikolać
echo "13 - " . ucwords($string) . '<br>' . PHP_EOL;                        // Žello đak Nikolać
echo "14 - " . strpos($string1, 'nik') . '<br>' . PHP_EOL;          // null
echo "15 - " . strpos($string1, 'Nik') . '<br>' . PHP_EOL;          // 17
echo "16 - " . stripos($string1, 'nik') . '<br>' . PHP_EOL;         // 17 'i' ignore case
echo "17 - " . substr($string1, 8) . '<br>' . PHP_EOL;               // o đak Nikolać , return string from position 8 to end
echo "18 - " . substr($string1, 8, 3) . '<br>' . PHP_EOL;    // o � , return string with 3 characters from position 8
echo "19 - " . str_replace('Đak', 'PHP', $string1) . '<br>' . PHP_EOL;    // Žello đak Nikolać
echo "20 - " . str_replace('đak', 'PHP', $string1) . '<br>' . PHP_EOL;    // Žello PHP Nikolać
echo "21 - " . str_ireplace('đak', 'PHP', $string1) . '<br>' . PHP_EOL;    // Žello PHP Nikolać 'i' ignore case


$number1 = 100;
$number2 = 12345;
echo $number1 . '<br>' . PHP_EOL;                                               // 100
echo $number2 . '<br>';                                                         // 12345
echo str_pad($number1, 8, 0, STR_PAD_LEFT) . '<br>';  // 00000100
echo str_pad($number2, 8, 0, STR_PAD_LEFT) . '<br>';  // 00012345
echo str_pad($number2, 8, 1, STR_PAD_LEFT) . '<br>';  // 11112345

// Multiline text and line breaks
//nl2br() - new line to brake
$longText = "
Hello, my name is Nikola,
I am 27,
I love my wife
";
echo $longText;                                                                   // print all in single line
echo nl2br($longText);                                                            // print all as expected

// Multiline text and reserve html tags

$longText1 = "
Hello, my name is <b>Nikola</b>
I am <b>27</b>,
I love my wife,
";

echo "1 - " . $longText1 . '<br>';
echo "2 - " . nl2br($longText1) . '<br>';
echo "3 - " . htmlentities($longText1) . '<br>' . PHP_EOL;   // Display html elements in string
//echo "4 - " . nl2br(htmlentities($longText1)) . '<br>';
//echo "5 - " . html_entity_decode(htmlentities($longText1)) . '<br>';
echo "6 - " . htmlspecialchars($longText1) . '<br>';   // the same as htmlentities()

//https://www.php.net/manual/en/ref.strings