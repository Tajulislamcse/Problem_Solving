<?php
$str1=trim(fgets(STDIN));
$str2=trim(fgets(STDIN));
$str3=trim(fgets(STDIN));
$str4=strtoupper($str2);
for ($i=0; $i <strlen($str3) ; $i++)
 {
 	if(ord($str3[$i])>=48 && ord($str3[$i])<=57)
 		echo "$str3[$i]";
   else if(ord($str3[$i])>=65&&ord($str3[$i])<=90)
   {
			for ($j=0; $j <strlen($str1) ; $j++)
		     { 
		       if(strtolower($str3[$i])==$str1[$j])
		       	   echo "$str4[$j]";
			
		     }
   }
   else {
   				for ($j=0; $j <strlen($str1) ; $j++)
		     { 
		       if(strtolower($str3[$i])==$str1[$j])
		       	   echo "$str2[$j]";
			
		     }
   }		     

}