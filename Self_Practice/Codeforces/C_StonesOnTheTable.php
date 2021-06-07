<?php
fscanf(STDIN,"%d",$n);
fscanf(STDIN,"%s",$str);
$count=0;
for($i=0;$i<$n-1;$i++)
   {
      if($str[$i]==$str[$i+1])
      	$count++;
   }
   echo "$count";