<?php
$a=$_POST["a"];      
$b=$_POST["b"];
$c=$_POST["c"];
$d=$_POST["d"];
$x=$_POST["y"];
$y=$_POST["x"];
$e=$_POST["e"];
$f=$_POST["f"];
$u=$_POST["u"];
$g=$_POST["g"];
$h=$_POST["h"];
$r=$_POST["r"];
$j=$_POST["j"];
$k=$_POST["k"];
$o=$_POST["o"];
$v=$_POST["v"];
$q=$_POST["q"]; 
echo "<center><h1>RESUME<hr></h1></center>";
echo "<img src='http://localhost/img/ih.jpg' align='right' height='100'>";
echo "<table border='4'>";
echo "<tr><td>Name</td><td> :</td><td>$a</td></tr>";
echo "<tr><td>Father name </td><td>:</td><td> $b</td></tr>";
echo "<tr><td>Mother name</td><td> :</td> <td>$c</td></tr>";
echo "<tr><td>Date of Birth</td><td> :</td><td> $d</td>";
echo "<td>$y</td>";
echo "<td>$x</td></tr>";
if ($e=='Male')
{
echo "<tr><td>Gender</td><td> :</td><td> $e</td></tr>";
}
else
{
echo "<tr><td>gender</td><td> :</td><td> $e</td></tr>";
}
echo "<tr><td>Nationality </td><td>:</td><td>$u</td></tr>";
echo "<tr><td>Mobile number</td><td> : </td><td>$f</td></tr>";
echo "<tr><td>Address</td><td> : </td><td>$g</td></tr>";
echo "<tr><td>Email id </td><td>:</td><td> $h</td></tr>";
echo "<tr><td>Qulification</td><td> :</td><td> $r</td></tr>";
echo "<tr><td>Work and Experience</td><td> :</td><td>$j</td><td>$k</td><td>$o</td></tr>";
echo "<tr><td>Reference </td><td>:</td><td>$v</td><td>$q</td></tr>";
echo "</table>";
?>



