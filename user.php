<?php
$db =mysqli_connect("localhost", "root", "","username");
$n=$_POST["a"];
$p=$_POST["b"];
$sql ="SELECT * FROM password where usrename='$n' and Password='$p'";
$res=mysqli_query($db,$sql);
if(mysqli_num_rows($res)>=1)
{
echo "You are valid user<br>";
echo "<a href='http://localhost/html/addphp.html'>INSERT DATA</a><br>";
echo "<a href='http://localhost/html/delphp.html'>DELTE DATA</a><br>";
echo "<a href='http://localhost/html/s.html'>UPDATE DATA</a><br>";
}
else 
{
echo "you are not valid user";
}
mysqli_close($db);
?>

