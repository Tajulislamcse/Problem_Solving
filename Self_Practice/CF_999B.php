<?php
fscanf(STDIN,"%d",$lenOfStr);
fscanf(STDIN,"%s",$str);
$j=0;
$rslt=array();
for ($i=1; $i <=ceil($lenOfStr/2) ; $i++)
 { 
	$divisor=$lenOfStr/$i;
	if($divisor==floor($divisor))
     {  
     	$rslt[$j++]=$divisor;
     }
 }
 if(count($rslt)==1)
 	echo strrev($str);
 else
 {
 	$str2="";
 	$str3="";
    $rev=strrev($str);
    $start=0;
     $last=substr($rev,strlen($str)-$rslt[count($rslt)-1],$rslt[count($rslt)-1]);
    // echo "last=$last";

    for ($i=0; $i <count($rslt)-1 ; $i++)
     { 
    	$diff=$rslt[$i]-$rslt[$i+1];
    	$str1=substr($rev,$start,$diff);
    	if($i%2==0)
    	{
          $str2.=$str1; 
        } 
        else
        	$str3.=$str1;

    	$start+=$diff;
     }
     if(count($rslt)%2==0)
     echo $str2.strrev($last).strrev($str3);
     else
     echo $str2.$last.strrev($str3);

 }


