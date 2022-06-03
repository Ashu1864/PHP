<?php
$db = mysqli_connect("localhost", "root", "","company");
$s=$_POST["a"];
$r=$_POST["b"];
$sql = "SELECT * FROM material where state='$s' or state='$r'";
$res = mysqli_query($db,$sql);
echo "<table border=2>";
echo "<tr><th>E.no</th><th>Emp.name</th><th>DOB</th><th>Mobil.no</th><th>Post</th><th>Salary</th><th>state</th><th>Email</th></tr>";
for ($i=0;$i<mysqli_num_rows($res);$i++)
{
$row=mysqli_fetch_row($res);
echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td></tr>";

}
echo "</table>";
mysqli_close($db);
?>
