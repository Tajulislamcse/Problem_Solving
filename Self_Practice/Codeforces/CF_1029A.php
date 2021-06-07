<?php
fscanf(STDIN,"%d %d",$n,$k);
$str=trim(fgets(STDIN));
$split=str_split($str);
$len=strlen($str);
if($len==1)
{
	echo str_repeat($str,$k);
}
elseif(count(array_unique($split))==1)
{
	echo $str;
	echo str_repeat($str[0],$k-1);
}
elseif($str[0]==$str[$len-1])
{   echo $str[0];
	for ($i=0; $i <$k ; $i++) 
	{ 
		echo substr($str,1);
	}
}
else
  echo str_repeat($str,$k);