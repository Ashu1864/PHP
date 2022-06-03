<?php
function square($a,$b)
{
$v=0;
for ($v=$a;$v<=$b;$v++)
{
$sq=$v*$v; 
echo "$sq" ."<br>";
}
}
square(50,70);
?>