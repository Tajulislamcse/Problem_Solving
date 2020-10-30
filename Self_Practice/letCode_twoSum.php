<?php
$line=ltrim(trim(fgets(STDIN),'['));
$line1=explode(',',rtrim(trim($line),']'));

fscanf(STDIN,"%d",$target);
//print_r($line1);

for ($i=0; $i <count($line1)-1 ; $i++)
 { 
	if(($line1[$i]+$line1[$i+1])==$target)
	{
		$ind=$i+1;
		echo "[$i,$ind]";
	}
 }
 
 ?>