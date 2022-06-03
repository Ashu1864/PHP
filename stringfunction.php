 <?php
//	Returns a character from a specified ASCII value
echo chr(65) . "<br>"; // Decimal value
echo chr(052) . "<br>"; // Octal value
echo chr(97) . "<br>"; // Hex value
?>
<?php
//	Converts the first character of a string to lowercase
echo lcfirst("Hello World!");
?>
<?php
//	Removes whitespace or other characters from the left side of a string
$str = "Hello World!";
echo $str . "<br>";
echo ltrim($str,"Hello");
?>
<?php
//		Removes whitespace or other characters from the right side of a string	
$str = "Hello World!";
echo $str . "<br>";
echo rtrim($str,"World!");
?>
<?php
//	Calculates the soundex key of a string
$str = "Hello";
echo soundex($str);
?>
<?php
//	Replaces some characters in a string (case-insensitive)
echo str_ireplace("WORLD","Peter","Hello world!");
?>
<?php
//	Pads a string to a new length
$str = "Hello World";
echo str_pad($str,20,"*");
?>
<?php
//		Replaces some characters in a string (case-sensitive)
echo str_replace("world","Peter","Hello world!");
?>
<?php
//	Count the number of words in a string	
echo str_word_count("Hello world!");
?>
<?php
//	Compares two strings (case-sensitive)

echo strcmp("a","a");
?>
