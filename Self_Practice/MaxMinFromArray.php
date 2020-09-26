<?php
$line=trim(fgets(STDIN));
$singleValue=explode(" ",$line);
print_r($singleValue);

for($i=0;$i<count($singleValue);$i++)
{
	for($j=0;$j<count($singleValue)-1;$j++)
	{
		if($singleValue[$i]<$singleValue[$j])
		{
            $singleValue[$i]=$singleValue[$i]+$singleValue[$j];
            $singleValue[$j]=$singleValue[$i]-$singleValue[$j];
            $singleValue[$i]=$singleValue[$i]-$singleValue[$j];

		}
	}
}
print_r($singleValue);