<?php
fscanf(STDIN,"%d %d",$n,$k);
fscanf(STDIN,"%s",$str);
$splitByOne=str_split($str);
print_r($splitByOne);
$splitByK=str_split($str,$k);
print_r($splitByK)
$uniqueAlph=array_values(array_unique($splitByOne));
$max=0;
for ($l=0; $l <count($uniqueAlph) ; $l++)
 { $lcount=0;
	for ($i=0; $i <count($splitByK) ; $i++)
		{     $count=0;
			for ($j=0; $j <$k ; $j++)
			{ 
				if($splitByK[$i][$j]==$uniqueAlph[$l])
				{
					$count++;
					if($count==$k)
                      $lcount++;

				}
			}
		}
		if($lcount>$max)
			$max=$lcount;
}
echo "$max";