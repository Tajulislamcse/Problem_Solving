<?php
$line1=explode(' ',trim(fgets(STDIN)));
$line2=explode(' ',trim(fgets(STDIN)));
//print_r($line1);
//print_r($line2);
$a=0;
$b=0;
for ($i=0; $i <count($line1) ; $i++) 
{ 
	if($line1[$i]>$line2[$i])
        $a++;
    if($line1[$i]<$line2[$i])
    	$b++;
}
echo "$a $b";