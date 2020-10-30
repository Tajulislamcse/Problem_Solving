<?php
fscanf(STDIN,"%d",$sizeOfArr);
$arr=explode(' ',trim(fgets(STDIN)));
$cnt=1;
$lastItem=array();
for ($i=0,$j=0; $i <$sizeOfArr-1 ; $i++)
 { 
	  if($arr[$i]>=$arr[$i+1])
	  {
	  	$cnt++;
	  	$lastItem[$j++]=$arr[$i];
	  }
 }
 $lastItem[count($lastItem)]=$arr[$sizeOfArr-1];
 echo "$cnt\n";
 for ($i=0; $i <count($lastItem) ; $i++)
  { 
  	if($i==count($lastItem)-1)
 	    echo "$lastItem[$i]";
 	else
 		echo "$lastItem[$i] ";
  }