<?php
fscanf(STDIN,"%d",$n);
$coins=explode(" ",trim(fgets(STDIN)));
$s=sortValue($coins);
$sum=0;
for ($i=0; $i <count($s) ; $i++)
 { 
	$sum+=$s[$i];
 }
 $mid=$sum/2;
 $comp=0;
 for ($i=0; $i <count($s) ; $i++)
  { 
 	$comp+=$s[$i];
 	if($comp>$mid)
 	{
 		fprintf(STDOUT,"%d",$i+1);
 		break;
 	}
  }

function sortValue($coins)
{
	$cnt=count($coins)-1;
	while($cnt--)
	{
		for ($i=0; $i <count($coins)-1 ; $i++)
		{ 
			if($coins[$i+1]>$coins[$i])
			{
			  $coins[$i+1]=$coins[$i+1]+$coins[$i];
			  $coins[$i]=$coins[$i+1]-$coins[$i];
			  $coins[$i+1]=$coins[$i+1]-$coins[$i];
            }
		}
	}
	return $coins;
}