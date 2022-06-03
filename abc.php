<?php
$db = mysqli_connect("localhost", "root", "", "employees");
      $sql = "SELECT * FROM data";
$res = mysqli_query($db,$sql);
echo "<table border=2>";
echo "<tr><th>E.no</th><th>Name</th></tr>";
for( $i=0;$i<mysqli_num_rows($res);$i++)
{
$row=mysqli_fetch_row($res);
echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
}
echo "</table>";
mysqli_close($db);
?>