<?php
fscanf(STDIN,"%d",$n);
for($i=0;$i<$n;$i++)
	list($a[$i],$b[$i])=explode(" ",trim(fgets(STDIN)));


for($i=0;$i<$n-1;$i++)
{
	$sum[$i]=$b[$i]-$a[$i+1]+$b[$i+1];
	$b[$i+1]=$sum[$i];
	
}
$max=$b[0];

for($i=0;$i<count($sum);$i++)
{
	if($sum[$i]>$max)
		$max=$sum[$i];
}
echo "$max";