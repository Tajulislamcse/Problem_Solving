<?php
fscanf(STDIN,"%d",$n);
$str=trim(fgets(STDIN));
$cnt=0;
for ($i=0; $i <strlen($str); $i+=3)
{ 
	echo substr($str,$i,3)."\n";
}
//print_r($cnt);