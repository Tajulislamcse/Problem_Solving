<?php
fscanf(STDIN,"%d %d",$n,$h);
$line=trim(fgets(STDIN));
$array=explode(' ',$line);
$count=0;
for($i=0;$i<$n;$i++)
{
	if($array[$i]<=$h)
		$count++;
	else
		$count+=2;
}
echo $count;
//print_r($singleValue);