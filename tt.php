<?php
$a=2;
$b=1;
$c=0;
echo "<table border='5'>";
for ($b=1 ;$b<11 ;$b++) 
{
echo "<tr>";
$c=$a*$b;
echo "<td>$a</td><td>X</td><td>$b</td><td>=</td><td>$c</td>";
echo "</tr>";
}
echo "</table>";
?>
