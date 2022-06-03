exp():
<?php
//Return 'e' raised to the power of different numbers:
echo(exp(0) . "<br>");
echo(exp(1) . "<br>");
echo(exp(10) . "<br>");
echo(exp(4.8));
?>
fmod():
<?php
//Return the remainder of x/y:
$x = 7;
$y = 2;
$result = fmod($x,$y);
echo $result;
// $result equals 1, because 2 * 3 + 1 = 7 
?>
is_finite():
<?php
//Check whether a value is finite or not:
echo is_finite(2) . "<br>";
echo is_finite(log(0)) . "<br>";
echo is_finite(2000);
?>
is_infinite():
<?php
//Check whether a value is infinite or not:
echo is_infinite(2) . "<br>";
echo is_infinite(log(0)) . "<br>";
echo is_infinite(2000);
?>
Is_nan():
<?php
//Check whether a value is 'not-a-number':
echo is_nan(200) . "<br>";
echo is_nan(acos(1.01));
?>
pow():
<?php
//The pow() function returns x raised to the power of y.
echo(pow(2,4) . "<br>");
echo(pow(-2,4) . "<br>");
echo(pow(-2,-4) . "<br>");
echo(pow(-2,-3.2));
?>
sqrt():
<?php
//Return the square root of different numbers:
echo(sqrt(0) . "<br>");
echo(sqrt(1) . "<br>");
echo(sqrt(9) . "<br>");
echo(sqrt(0.64) . "<br>");
echo(sqrt(-9));
?>