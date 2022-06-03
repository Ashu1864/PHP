<?php
$db = mysqli_connect("localhost", "root", "", "student");
$r=$_POST["a"];
$sql = "SELECT * FROM id where rollno =$r";
$res = mysqli_query($db,$sql);
$row=mysqli_fetch_row($res);
echo "<table border =3>";
echo "<tr><th>rollno</th><th>Name</th><th>Father name</th><th>mother name</th><th>Dob</th><th>Class</th><th>Mobile no.</th><th>Address</th><th>Email id</th></tr>";
echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td>";
echo "</table>";
mysqli_close($db);
?>

