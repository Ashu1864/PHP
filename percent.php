<?php
$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
$d=$_POST["d"];
$e=$_POST["e"];
$f=($a+$b+$c+$d+$e)/500*100;
if ($f<40)
{
echo "<font color='red'>$f you are fail</font>";
}
else 
{
echo "<font color='green'>$f you are pass</font>";
}
?>