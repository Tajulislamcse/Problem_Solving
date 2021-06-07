<?php
fscanf(STDIN,"%d",$n);
$line=trim(fgets(STDIN));
$singleValue=explode(' ',$line);

$saveToAnother=$singleValue;

for($i=0;$i<$n;$i++)
{
	for($j=0;$j<$n-1;$j++)
	{
		if($saveToAnother[$i]<$saveToAnother[$j])
		{
			$saveToAnother[$i]=$saveToAnother[$i]+$saveToAnother[$j];
			$saveToAnother[$j]=$saveToAnother[$i]-$saveToAnother[$j];
			$saveToAnother[$i]=$saveToAnother[$i]-$saveToAnother[$j];
		}
	}
}
for($i=0;$i<$n;$i++)
$store[$i]=array_keys($singleValue,$saveToAnother[$i]);

for($i=0;$i<$n-1;$i++){
$str[$i]=$store[$i][0]+1;
echo "$str[$i] ";
}
echo $store[$n-1][0]+1;
