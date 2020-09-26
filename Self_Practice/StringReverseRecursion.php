<?php
fscanf(STDIN,"%s",$str);
$n=strlen($str);

echo stringReverse($n);
//echo "$str[$index]";

function stringReverse($n)
{

	if($n==0)
		return 2;
	//echo $str[$n-1];
	else
	   return stringReverse($n-1);
}