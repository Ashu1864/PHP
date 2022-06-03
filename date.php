d - Represents the day of the month (01 to 31)<br>
m - Represents a month (01 to 12)<br>
Y - Represents a year (in four digits)<br>
l (lowercase 'L') - Represents the day of the week
<br>
<?php 
//	Use the date() function to automatically update the copyright year on your website:	
echo date("l");
?>
<br>
Time
H - 24-hour format of an hour (00 to 23)<br>
h - 12-hour format of an hour with leading zeros (01 to 12)<br>
i - Minutes with leading zeros (00 to 59)<br>
s - Seconds with leading zeros (00 to 59)<br>
a - Lowercase Ante meridiem and Post meridiem (am or pm)<br>
<?php
echo "The time is " . date("h:i:sa");
?>
<br>
<?php
//	The example below sets the timezone to "America/New_York", then outputs the current time in the specified format:
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?>
<br>
mktime()
<br>
<?php
//	mktime(hour,minute,second,month,day,year)
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>
<br>
strtotime()
<br>
<?php
//	strtotime(time,now)
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>
<br>
<?php
//	PHP is quite clever about converting a string to a date, so you can put in various values:
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>
<br>
<?php
//	The example below outputs the dates for the next six Saturdays:
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}
?>
<br>
<?php
//	The example below outputs the number of days until 4th of July:
$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of July.";
?>