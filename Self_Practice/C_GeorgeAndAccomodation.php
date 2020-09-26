<?php
fscanf(STDIN,"%d",$n);

for($i=0;$i<$n;$i++)
	list($a[$i],$b[$i])=explode(" ",trim(fgets(STDIN)));
$count=0;
for($i=0;$i<$n;$i++)
{
	$diff=$b[$i]-$a[$i];
	if($diff>=2)
	{
		$count++;
	}
}
echo "$count";