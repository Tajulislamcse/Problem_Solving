<?php
fscanf(STDIN,"%d\n",$t);
while($t--)
{ fscanf(STDIN,"%s %s\n",$a,$b);
  $avg=($a+$b)/2;
  echo $avg."\n";
}    