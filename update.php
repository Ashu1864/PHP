<?php
$db=mysqli_connect("localhost" , "root", "", "company");
$r=$_POST["a"];
$s=$_POST["b"];
$t=$_POST["c"];
$sql="update material set Ename='$r', salary=$s where Eno=$t";
$res=mysqli_query($db,$sql);
echo "Record updated";
mysqli_close($db);
?>
