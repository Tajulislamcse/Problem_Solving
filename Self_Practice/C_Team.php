<?php
$count=0;
fscanf(STDIN,"%d",$n);
if($n==1)
{
for($i=0;$i<1;$i++)
{
	for($j=0;$j<6;$j++)
	{
		$line[$i][$j]=fgetc(STDIN);
	}
}
if((($line[0][0]&&$line[0][2])==1)||($line[0][2]&&$line[0][4])==1||($line[0][0]&&$line[0][4])==1)
$count++;
echo "$count";
}
else
{
	for($i=0;$i<$n;$i++)
	{
		$line[$i]=explode(' ',trim(fgets(STDIN)));
		
	}
	for($i=0;$i<$n;$i++)
	{
		$sum=0;
		for($j=0;$j<3;$j++)
		{
		// echo "str[$i][$j]=".$line[$i][$j]."\n";	
			$sum=$sum+$line[$i][$j];
			//echo "hi";
		}
		
		if($sum>=2)
			{
				$count++;
				//continue;
			}
			
			
	}
	echo "$count";
	
}

