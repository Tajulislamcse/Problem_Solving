<?php
fscanf(STDIN,"%d",$n);
$line=trim(fgets(STDIN));
$singleValue=explode(' ', $line);
$sum=0;
$count=0;
for($i=0;$i<$n;$i++)
{
	if($singleValue[$i]>0)
		$sum+=$singleValue[$i];
	elseif ($sum>0) {
		$sum--;
	}
	else
		$count++;

}

echo "$count";