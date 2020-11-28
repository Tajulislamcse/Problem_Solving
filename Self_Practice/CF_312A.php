<?php
fscanf(STDIN,"%d",$n);
for ($i=0; $i <$n ; $i++)
 { 
	$str=trim(fgets(STDIN),"\n\r\x0B\t\0");
	$left=substr($str,0,5);
	$right=substr($str,-5);
	if($left=='miao.'&&$right=='lala.')
		echo "OMG>.< I don't know!\n";
	elseif ($left=='miao.')
	   {
		 echo "Rainbow's\n";
	   }
	elseif($right=='lala.')
		echo "Freda's\n";
	else
		echo "OMG>.< I don't know!\n";

 }