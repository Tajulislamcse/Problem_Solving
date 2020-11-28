<?php
$n=readline();
$sum=0;
$i=1;
$maxHeight=0;
while(true)
{
	$cubes=($i*($i+1))/2;
	$sum+=$cubes;
	if($sum>$n)
		break;
	$maxHeight++;
	$i++;

}
echo "$maxHeight";