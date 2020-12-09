<?php
fscanf(STDIN,"%d",$n);
$numbers=explode(' ',trim(fgets(STDIN)));
$even=array();
$odd=array();
for ($i=0,$j=0,$k=0; $i <$n; $i++)
 { 
	if($numbers[$i]%2==0)
	{
		if(count($even)<2)
		$even[$j++]=$numbers[$i];
        $single=$i;
	}
	else
	{   
		if(count($odd)<2)
		$odd[$k++]=$numbers[$i];
		$single2=$i;
	}

 }
 if(count($even)==1)
 {
 	echo $single+1;
 }
 else
 	echo $single2+1;


