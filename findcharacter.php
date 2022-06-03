<?php
function world($a,$b)
{
$c=0;
while(strlen($a)>0)
{
$a=substr(strstr($a,$b),1);
if(strlen($a)>0)
{
	
	$c++;
}
}
echo $c;
}
echo world("hello world world world","world");
?> 