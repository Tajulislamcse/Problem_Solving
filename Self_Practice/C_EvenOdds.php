<?php
fscanf(STDIN,"%d %d",$n,$k);
$odd="";
$even="";
for($i=1;$i<=$n;$i++)
{ 
	//ini_set('memory_limit', '-1');
	$str[$i]=$i;
	if($str[$i]%2==1)
		$odd.=$str[$i];
	else
		$even.=$str[$i];

}
$concate=$odd.$even;
echo $concate[$k-1];