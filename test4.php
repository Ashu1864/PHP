<?php
function word($a,$c)
{
$f=0;
for ($i=0;$i<strlen($a);$i++)
{
$ch=substr($a,$i,1);
if($ch==$c)
{
	$f=1;
	break;
}
}


if ($f==1)
{  
echo "$c is found .<br>";
}
else
{
echo "$c is not found.<br>";
}
}
echo word("hello everyone","e");
?>