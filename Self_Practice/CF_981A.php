<?php
$str=trim(fgets(STDIN));
$rev=strrev($str);
$len=strlen($str);

if($str!=$rev)
	echo "$len";
else
{
	for ($i=1; $i <$len; $i++)
	{ 
		$flag=0;
		$sbstr=substr($str,$i);
		$revSbstr=strrev($sbstr);
		if($sbstr!=$revSbstr)
		{
          echo strlen($sbstr);
          $flag=1;
          break;
		}

	}
	if ($flag==0)
	 {
		echo "0";
	 }
}