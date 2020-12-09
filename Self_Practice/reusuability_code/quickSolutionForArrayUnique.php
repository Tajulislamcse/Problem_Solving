<?php
fscanf(STDIN,"%s",$str);
$ara=str_split($str);
$uniquElement=array();
for ($i=0; $i <count($ara) ; $i++) 
{ 
	$uniquElement[$ara[$i]]=1;
}
foreach ($uniquElement as $key => $value)
{
   echo $key;
}