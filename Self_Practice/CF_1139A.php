<?php
fscanf(STDIN,"%d",$n);
fscanf(STDIN,"%s",$str);
$sum=0;
for ($i=0; $i <$n ; $i++)
 { 
	if($str[$i]%2==0)
		$sum+=$i+1;

 }

 echo "$sum";