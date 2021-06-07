<?php
$str=trim(fgets(STDIN));
$arr=explode(':',$str);
//print_r($str);
$unit=str_split($arr[2],2);
//print_r($unit);
if($arr[0]=='12'&&$unit[1]=='PM')
  echo rtrim($str,'PM');
else if($arr[0]=='12'&&$unit[1]=='AM')
{
  echo "00:$arr[1]:$unit[0]";
}
elseif ($unit[1]=='PM') 
{ 
	$cnvrt=$arr[0]+12;
	echo "$cnvrt:$arr[1]:$unit[0]";
}
else
echo rtrim($str,'AM');