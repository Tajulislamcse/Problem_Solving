<?php

fscanf(STDIN,"%d",$n);
$max=0;
for($i=0;$i<$n;$i++)
{
	for($j=0;$j<$n;$j++)
	{
		if($i==0||$j==0)
		$array[$i][$j]=1;
	    else
	    	$array[$i][$j]=$array[$i-1][$j]+$array[$i][$j-1];
	    if($array[$i][$j]>$max)
	    	$max=$array[$i][$j];
	}
}
echo "$max";
//print_r($array);