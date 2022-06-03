<?php
function show()
{
echo "hello";
}
show();
?>
<br>
<?php
function add($a,$b)
{
$c=$a+$b;
echo "$c";
}
add(10,20);
?>
<br>
<?php
function si($p,$r,$t)
{
$si=($p*$r*$t)%100;
return ($si);
}
$ans=si(5,3,4);
echo "$ans";
?>