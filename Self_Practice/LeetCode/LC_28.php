<?php
fscanf(STDIN,"%s %s",$haystack,$needle);
 echo ImplementstrStr($haystack,$needle);
 function ImplementstrStr($haystack,$needle)
 {
 	$pattern="/$needle/";
    if(preg_match($pattern,$haystack)==1)
    {
         
          $len=strlen($needle);
          for ($i=0; $i <strlen($haystack)-$len+1 ; $i++)
           { 
          	 	if(substr($haystack,$i,$len)==$needle)
          	 	{
          	 		$firstIndx=$i;
          	 		break;

          	 	}
           }
         return $firstIndx;	 	

	 }
	 else 
	      return -1;		

 }
 /*
 bbbbababbbaabbba
"abb"

 */

