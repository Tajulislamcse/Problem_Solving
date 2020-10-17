<?php
fscanf(STDIN,"%d",$n);
$line=explode(' ',trim(fgets(STDIN)));
$sum=0;
for ($i=0; $i <$n ; $i++) 
{ 
	$sum=bcadd($sum, $line[$i]);
}
print_r($sum);