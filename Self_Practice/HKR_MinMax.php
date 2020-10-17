<?php
$line=explode(' ',trim(fgets(STDIN)));
sort($line);
//print_r($line);
$n=count($line);
$minSum=0;
$maxSum=0;
for ($i=0,$j=1; $i <$n-1,$j<$n ;$i++,$j++) 
{ 
  $minSum+=$line[$i];
  $maxSum+=$line[$j];	

}
echo "$minSum $maxSum";