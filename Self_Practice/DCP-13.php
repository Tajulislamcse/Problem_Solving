<?php
fscanf(STDIN,"%d\n",$tc);

while($tc--)
{
	$str1=trim(fgets(STDIN));

	$arr1=explode(' ',$str1);

	$str2=trim(fgets(STDIN));

	$arr2=explode(' ',$str2);

	$ban1=$arr1[0]+$arr1[1];

	$pak1=$arr1[2]+$arr1[3];

	$ban2=$arr2[0]+$arr2[1];

	$pak2=$arr2[2]+$arr2[3];

	if(($ban1>$pak1)&&($ban2>$pak2))
		echo "Banglawash"."\n";
	else echo "Miss"."\n";

}