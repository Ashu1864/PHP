<?php
$n="Ashutosh Singh Jasrotia";
$f=substr($n,0,1);
$fs=strpos($n," ");
$s=substr($n,$fs+1,strlen($n));
$ss=strpos($s," ")+$fs+1;
$sn=substr($s,0,1);
$ln= substr($n,$ss);
echo "$f.$sn.$ln";
?>
  