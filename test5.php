<?php
function fact($num)
{
$b=0;
$c=1;
for ($b=1;$b<=$num;$b++)
{
$c=$c*$b;
}
return($c);
}
echo "factorial is".fact(5);
?>
