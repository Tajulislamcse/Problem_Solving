<?php
fscanf(STDIN,"%s",$password);
$split=str_split($password,10);
for ($i=0; $i <10 ; $i++)
 { 
         fscanf(STDIN,"%s",$str[$i]);
 }
 $resPwd="";
 for ($i=0; $i <8 ; $i++) 
 { 
 	for ($j=0; $j <10 ; $j++)
 	 { 
 		if($split[$i]==$str[$j])
 			$resPwd.=$j;

 	 }
 	
 }
 echo "$resPwd";



