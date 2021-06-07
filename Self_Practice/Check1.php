<?php
$line=trim(fgets(STDIN));
$arr=explode(' ',$line);
$size=count($arr);
while($size--)
{
	for ($i=0; $i <count($arr)-1 ; $i++)
	{ 
		if($arr[$i]>$arr[$i+1])
		{
			$tmp=$arr[$i];
			$arr[$i]=$arr[$i+1];
			$arr[$i+1]=$tmp;
		}

	}
}
print_r($arr);