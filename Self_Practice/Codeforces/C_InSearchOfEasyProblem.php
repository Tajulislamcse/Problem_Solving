<?php
fscanf(STDIN,"%d",$n);
$line=trim(fgets(STDIN));
$singleValue=explode(" ", $line);
$count=0;
for($i=0;$i<$n;$i++)
{
	if($singleValue[$i]==1)
	{
		echo "HARD";
		$count=1;
		break;
		
	}
	
}
if($count==0)
echo "EASY";
