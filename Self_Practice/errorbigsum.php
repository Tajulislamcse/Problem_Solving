<?php

while ($input=trim(fgets(STDIN))) 
{
	$arr=explode(',',$input);
	//var_dump($arr);
	$revArrE1=strrev($arr[0]); 
	//var_dump($revArrE1);
	$revArrE2=strrev($arr[1]);

	$revSum=(int)$revArrE1+(int)$revArrE2;
     $revSumToStr=(string)$revSum;
   // var_dump($revSumToStr);
//$rev=strrev($revSumToStr);
     //var_dump($rev);
    // $rmvzero=ltrim(str)
	$orgNum=ltrim(strrev($revSumToStr),'0');
	//var_dump($orgNum);
    echo "$orgNum"."\n";

}