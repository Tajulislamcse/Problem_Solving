<?php
 fscanf(STDIN,"%d",$t);
 $arr=array();
 while($t--)
 {
 	fscanf(STDIN,"%s",$str);
 	if(array_key_exists($str,$arr))
 	{
 		$arr[$str]++;
 		echo $str.$arr[$str]."\n";
 	}
 	else
 	{
 		$arr[$str]=0;
 		echo "OK\n";
 	}
 }

