<?php
$a=$_POST["n"];
$b=1;
$c=0; 
echo "<table border='3'>";
for ($b=1;$b<11;$b++)
{
$c=$a*$b; 
echo "<tr><td>$a</td><td>x</td><td>$b</td><td>=</td><td>$c</td></tr>";
}
echo "</table>";
?>