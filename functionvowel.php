<?php
function vowel($s)
{
$v=0;
for($i=0;$i<strlen($s);$i++)
{
$a=substr($s,$i,1);
if($a=="a"||$a=="e"||$a=="i"||$a=="o"||$a=="u")
{
	$v++;
}
}
return($v);
}
echo vowel("helloo");
?>
