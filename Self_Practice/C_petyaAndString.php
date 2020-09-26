<?php

for($i=0;$i<2;$i++)
$str[$i]=trim(fgets(STDIN));
$firstStr=strtolower($str[0]);
$secondStr=strtolower($str[1]);

if($firstStr==$secondStr)
{
	echo "0";
	
}
else	
    for($i=0;$i<strlen($firstStr);$i++)
{
	if ($firstStr[$i]>$secondStr[$i]) {
		echo "1";
		break;
	}
		if ($firstStr[$i]<$secondStr[$i]) {

	 echo "-1";
	 break;
	}

}

/*
$sum1=0;
$sum2=0;
for($i=0;$i<strlen($firstStr);$i++)
  $sum1+=ord($firstStr[$i]);
for($i=0;$i<strlen($secondStr);$i++)
  $sum2+=ord($secondStr[$i]);
echo "sum1=$sum1 sum2=$sum2 ";
if($sum1==$sum2)
	echo "0";
elseif ($sum1>$sum2) 
	echo "1";

else echo "-1";

*/

