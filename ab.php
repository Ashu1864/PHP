<?php
function check($a,$b)
{
if(strlen(strstr($a,$b))>0)
{
echo "Text is present";
}
else
{
echo "Text is not present";
}

}


check("This is test","do");
?>