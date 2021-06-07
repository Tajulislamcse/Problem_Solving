<?php

while(fscanf(STDIN,"%d %d\n",$hours,$member))
{     $sum=0;
	for ($i=0; $i <$member ; $i++) 
	{ 
		# code...
		fscanf(STDIN,"%d",$workingHour[$i]);
		$sum+=$workingHour[$i];

	}
	$d=ceil(($hours)/($sum));
	//echo "$hours $member $workingHour[0] $workingHour[1]";
	if ($d==1)
	{

	  echo "Project will finish within 1 day."."\n";
	}  
		# code...
	else 
			echo "Project will finish within $d days."."\n";
  }