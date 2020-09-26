<?php
fscanf(STDIN,"%d %d",$w1,$w2);

for($i=0;$i<$w2;$i++)
{
	$limak=$w1*3;
	$w1=$limak;
	$Bob=$w2*2;
	$w2=$Bob;
	if($limak>$Bob)
	{
		echo $i+1;
		break;
	}
}