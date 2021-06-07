<?php
$str=trim(fgets(STDIN));
$alpha='abcdefghijklmnopqrstuvwxyz';
$split=str_split($alpha,1);
//$revAlpha=strrev($alpha);

$concate='a'.$str;
//echo "$concate";
$count=0;
for($i=0;$i<strlen($concate)-1;$i++)
{
	$keyDistance=abs(ord($concate[$i])-ord($concate[$i+1]));
	//echo "$keyDistance\n";
	if($keyDistance>13)
   {
   	     $k1[$i]=array_keys($split,$concate[$i]);
   	    // print_r($k1);
   	     //$key1=$k1[$i];
   	    //
   	     $k2[$i]=array_keys($split,$concate[$i+1]);
   	    //print_r($k2);
   	     //$key2=$k2[$i];
   	     if($k1[$i]>$k2[$i]){

   	       $temp[$i]=$k1[$i];
   	       $k1[$i]=$k2[$i];
   	       $k2[$i]=$temp[$i];

   	   }

   	    
   	     
   $count+=($k1[$i][0]+26)-$k2[$i][0];
   //echo "plus=$count\n";
   }
   else
   {
   	   	  $k1[$i]=array_keys($split,$concate[$i]);
   	     //$key1=$k1[$i];
   	    //
   	     $k2[$i]=array_keys($split,$concate[$i+1]);
   	     //$key2=$k2[$i];

   	     
         $count+=abs($k1[$i][0]-$k2[$i][0]);
   //echo "minus=$count\n";

   }
   //print_r($k1);
  // print_r($k2);

}
echo "$count";

//print_r($keyDistance);