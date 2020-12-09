<?php
$prime=[
	2,3,5,7,11,13,17,19,23,29,31,37,41,43,47
];
fscanf(STDIN,"%d %d",$n,$m);
$indx=-100;
$indx2=-100;
for ($i=0; $i <count($prime) ; $i++)
 { 
	if($prime[$i]==$n)
		$indx=$i;
	else
	{
		if($prime[$i]==$m)
			$indx2=$i;
	}
 }
 if($indx2-$indx==1)
 		echo "YES\n";
 	else
       echo "NO\n";