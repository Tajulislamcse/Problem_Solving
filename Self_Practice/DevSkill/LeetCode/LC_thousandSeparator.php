<?php
fscanf(STDIN,"%s",$n);
if(strlen($n)<4)
{
	echo $n;
}
else
{
$rev=strrev($n);
$str='';
for ($i=0; $i <strlen($rev); $i+=3)
 {
  if($i>0)
 	{
	  $str.='.'.substr($rev,$i,3);
	} 
	else
		$str.=substr($rev,$i,3);
 }
 echo strrev($str);
}