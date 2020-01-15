<?php

fscanf(STDIN,"%d\n",$tc);
for ($i=1; $i <=$tc ; $i++) 
{ 
	$str=trim(fgets(STDIN));
	$cnvrtArr=explode(" ",$str);
	$dis=sqrt(pow(($cnvrtArr[3]-$cnvrtArr[0]),2)+pow(($cnvrtArr[4]-$cnvrtArr[1]),2));
	echo "Case $i: ";
	if($dis>$cnvrtArr[2])
		echo "Outside"."\n";
	elseif ($dis<$cnvrtArr[2]) 
		echo "Inside"."\n";

		else echo "OnCircle"."\n";
}