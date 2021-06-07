<?php
fscanf(STDIN,"%d",$n);
$line=trim(fgets(STDIN));
$single=explode(' ', $line);

$count=0;
$j=0;
$l=0;
$sum=0;

for($i=$n-1;$i>=0;$i--) { 
 	if($single[$i]=="-1")
 	{
       break;
 	}
 	$j++;
 
 }
 
 for($k=0;$k<$n-$j;$k++)
 	
 {
 	if($single[$k]>0)
 	{
     break;
 	}
 	else $l++;
 }
 for($m=$l;$m<$n-$j;$m++)
 {
  $sum+=$single[$m];
 }
 
 if($sum>0)
 	echo "$l";
 else 
 {
 	$count=$l-$sum;
 	echo "$count";
 }



    
 

 //print_r($single);