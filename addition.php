<?php
$db =mysqli_connect("localhost", "root", "","company");
$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
$d=$_POST["d"];
$e=$_POST["e"];
$f=$_POST["f"];
$g=$_POST["g"];
$h=$_POST["h"];
$sql="insert into material values($a,'$b','$c',$d,'$e',$f,'$g','$h')";
$res=mysqli_query($db,$sql);
echo "row inserted";
mysqli_close($db);
?>