<?php
$db =mysqli_connect("localhost", "root", "","company");
$s=$_POST["r"];
$sql="delete from material where Eno=$s";
$res =mysqli_query($db,$sql);
mysqli_close($db);
echo "$s has been deleted";
?>