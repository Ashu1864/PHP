  <?php
  $a=0;
 $b=0;
 $s=50;
 for ($a=1;$a<=9;$a=$a+2)
 {
 for($k=1;$k<=$s;$k++)
 {
 echo "&nbsp&nbsp";
 }              
 $s--;
  for ($b=1;$b<=$a;$b++)  
    {
    echo "*";
    }
    echo "<br>";
    }
    ?>
