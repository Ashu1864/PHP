<?php
$a=0;
$b=0;
$s=50;
for($a=1;$a<=15;$a=$a+2)
{
	for($k=1;$k<=$s;$k++)
	{
		echo"&nbsp&nbsp";
	}
	$s--;
	for($b=1;$b<=$a;$b++)
	{
		echo"*";
	}
	echo".<br>";
}
for($a=13;$a>=1;$a=$a-2)
{
	for($k=1;$k<=$s+2;$k++)
	{
		echo"&nbsp&nbsp";
	}
	$s++;
	for($b=$a;$b>=1;$b--)
	{
		echo"*";
	}
	echo".<br>";
}
?>