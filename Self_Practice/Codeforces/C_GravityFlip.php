<?php
fscanf(STDIN,"%d",$n);
$line=trim(fgets(STDIN));
$singleValue=explode(' ', $line);
for($i=0;$i<$n;$i++){
	for($j=0;$j<$n-1;$j++){
		if($singleValue[$i]<$singleValue[$j])
		{
			$singleValue[$i]=$singleValue[$i]+$singleValue[$j];
			$singleValue[$j]=$singleValue[$i]-$singleValue[$j];
			$singleValue[$i]=$singleValue[$i]-$singleValue[$j];

		}

	}
}
for($i=0;$i<$n;$i++)
	echo "$singleValue[$i] ";
