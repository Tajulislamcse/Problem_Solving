<?php
fscanf(STDIN,"%d",$n);
$arr=explode(" ",trim(fgets(STDIN)));
//$n=$n-1;
while($n--)
{
	for($i=0;$i<$n;$i++)
	{
		if($arr[$i]>$arr[$i+1])
		{
			$tmp=$arr[$i];
			$arr[$i]=$arr[$i+1];
			$arr[$i+1]=$tmp;
		}
	}
}
$res=0;
while($i<count($arr))
{
	$res+=$arr[$i+1]-$arr[$i];
	$i+=2;
}

echo "$res";