<?php
$db = mysqli_connect("localhost", "root", "","mydb");
$sql = "SELECT * FROM mydb";
$res = mysqli_query($db,$sql);

for($i=0;$i<mysqli_num_rows($res);$i++)
{
$row=mysqli_fetch_row($res);
echo $row[0] . $row[1] ."<br>";
}
mysqli_close($db);
?>




