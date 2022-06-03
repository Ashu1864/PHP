<?php
$n=100;
for ($count = 1; $count <=$n; $count++)
{
$c=0;
	for($j=2;$j<$count;$j++)
	{
		if($count%$j==0)
		{
			$c=1;
			break;
		}
	}
if($c==0)
{
	echo "<font size='10' color='red'>$count</font>". ",";
}
else
{
	echo $count .",";
}
}
?>
