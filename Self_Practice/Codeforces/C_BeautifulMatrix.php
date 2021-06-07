<?php
for($i=0;$i<5;$i++)
{
 $line=trim(fgets(STDIN));
 $mat[$i]=explode(" ", $line);
}

for($i=0;$i<5;$i++)
{
	for($j=0;$j<5;$j++)
	{
		if($mat[$i][$j]==1)
		{
			$index=$i.$j;
			$sum=$i+$j;
			break;
		}
	}
}
if($index==00||$index==04||$index==40||$index==44)
echo "4";
elseif ($index==12||$index==21||$index==23||$index==32) {
	echo "1";
	# code...
}
elseif($index==22)
	echo "0";

elseif ($sum%2==0) {
	echo "2";
	# code...
}
else
echo "3";