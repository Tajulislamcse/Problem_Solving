<?php
$str=trim(fgets(STDIN));
$pattern=trim(fgets(STDIN));
$count=0;
for ($i=0; $i <strlen($str) ; $i++) 
{ 
	$str1=substr($str,$i,strlen($pattern));
	if($str1==$pattern)
		$count++;
}
echo "$count\n";