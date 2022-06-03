<?php
$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
if ($a>$b&&$b>$c)
{
echo "$a is a geater number";
}
elseif ($b>$c&&$b>$a)
{
echo "$b is a geater number";
}
else
{
echo "$c is a geater number";
}
?>