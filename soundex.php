<?php
echo soundex("blake");
echo soundex("black");
if(soundex("blake")==soundex("tlack"))
{
	echo "true";
}
else
{
	echo "false";
}
?>