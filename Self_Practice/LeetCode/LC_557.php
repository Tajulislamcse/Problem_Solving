<?php
$sen=explode(" ",trim(fgets(STDIN)));
for ($i=0; $i <count($sen) ; $i++)
 { 
 	if($i==count($sen)-1)
 		echo strrev($sen[$i]);
 	else
	echo strrev($sen[$i])." ";
}