<?php
while(true)
{
	fscanf(STDIN,"%s",$str);
	if($str=='end')
		break;
	$sum=0;
	for ($i=0; $i <strlen($str) ; $i++) 
	{ 
		$sum+=ord($str[$i]);
	}
	echo "$sum\n";
}