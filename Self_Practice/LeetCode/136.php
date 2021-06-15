<?php
$nums=explode(" ",trim(fgets(STDIN)));
$v=array();
foreach ($nums as $key => $num)
 {
	if(array_key_exists($num,$v))
		$v[$num]++;
	else
		$v[$num]=1;
 }
 foreach ($v as $key => $value)
  {
 	if($value==1)
 		echo $key;
  }