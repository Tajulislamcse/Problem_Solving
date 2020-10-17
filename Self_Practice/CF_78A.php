<?php
$firsCnt=0;
$secondCnt=0;
$thirdCnt=0;
for ($i=0; $i <3 ; $i++) 
{ 
$str[$i]=str_replace(' ','',trim(fgets(STDIN)));



for ($j=0; $j <strlen($str[$i]) ; $j++)
{ 
	

			if($str[$i][$j]=='a'||$str[$i][$j]=='e'||$str[$i][$j]=='i'||$str[$i][$j]=='o'||$str[$i][$j]=='u')
			{
					 if($i==0)
					 	$firsCnt++;
					 elseif ($i==1)
					   $secondCnt++;
					  else
					  	$thirdCnt++;
			}
			 	

	
}
}
if($firsCnt==5&&$secondCnt==7&&$thirdCnt==5)
	echo "YES";
else
	echo "NO";