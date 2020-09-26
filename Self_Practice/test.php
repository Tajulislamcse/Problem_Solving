<?php
fscanf(STDIN,"%d",$num);
while ($num>0) 
{
	$n=$num%10;
	echo "$n";
	$num=(int)($num/10);
	//echo " $num\n";
	
	# code...
}