<?php
fscanf(STDIN,"%d\n",$testcases);
while($testcases--)
{
  fscanf(STDIN,"%d",$n);
   $ans1=pow(($n*($n+1)/2),2);
  $ans2=($n*($n+1)*(2*$n+1))/6;
   echo $diff=$ans1-$ans2."\n";
  
}    