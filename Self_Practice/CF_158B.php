<?php
fscanf(STDIN,"%d",$n);
$passenger=explode(" ",trim(fgets(STDIN)));
$four=0;
$one=0;
$two=0;
$three=0;
for ($i=0; $i <$n ; $i++)
 { 
	 if($passenger[$i]=='4')
		 $four++;
	 elseif($passenger[$i]=='3')
	 	$three++;
	 elseif($passenger[$i]=='2')
	 	$two++;
	 else 
	 	 $one++;
} 
 if($one>$three)
 {
    $one=$one-$three;
    
    echo $four+$three+ceil(($two*2+$one)/4);
 } 	
 else
 {
  	
  	echo $four+$three+ceil($two/2);

 }
 

