<?php
$a = 25;
$b = 10;
$c=0;
$op = '*';
switch ($op)
{
case '+':
$c=$a+$b;
echo "$c it is a sum";
break;
case '-': 
$c=$a-$b;
echo "$c it is a subtraction";
break;
case '*' : 
$c=$a*$b;
echo "$c it is a multiplication"; 
break;
default:
echo "Invalid Choice";
}
?>