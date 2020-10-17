<?php
$str=trim(fgets(STDIN));
fscanf(STDIN,"%d",$k);

 $len=strlen($str);
 //echo "$portion\n";
 //$inc=$portion-1;
 $decision=false;
 if($len%$k==0)
    {	
        $portion=$len/$k;
        $cnt=0;
		 for ($i=0; $i <$len ; $i+=$portion)
		 { 
		 	$str1=substr($str,$i,$portion);
		 	if($str1==strrev($str1))
		 	{
		 		$cnt++;
		 		if($cnt==$k)
		 		{
		 			$decision=true;
		 			break;
		 		}
		 	}

		 }
    }		 
   echo $decision?"YES":"NO";