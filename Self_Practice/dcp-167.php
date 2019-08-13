<?php
fscanf(STDIN,"%d\n",$testcases);
for($i=1;$i<=$testcases;$i++)
{
  fscanf(STDIN,"%d",$n);
   $ans1=pow((($n*($n+1))/2),2);
 // $ans2=($n*($n+1)*(2*$n+1))/6;
   echo "Case $i: $ans1"."\n";
  
}    