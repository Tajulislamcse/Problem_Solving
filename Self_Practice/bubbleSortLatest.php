<?php
$arr=explode(' ',trim(fgets(STDIN)));
$n=count($arr)-1;
while($n--)
{
	for ($j=0; $j <count($arr)-1 ; $j++)
	{ 
		if($arr[$j+1]<$arr[$j])
		{
			$arr[$j+1]=$arr[$j+1]+$arr[$j];
			$arr[$j]=$arr[$j+1]-$arr[$j];
			$arr[$j+1]=$arr[$j+1]-$arr[$j];

		}
	}
}	
echo "after sorting";
print_r($arr);