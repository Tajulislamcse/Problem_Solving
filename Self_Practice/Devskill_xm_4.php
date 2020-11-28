<?php
while(true)
{
	fscanf(STDIN,"%s",$str);
	if($str=='end')
		break;
	$al="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	for ($i=0; $i <strlen($al) ; $i++)
	 { 
	    $count=0;

		 for ($j=0; $j <strlen($str) ; $j++)
		  { 
		 	 if($al[$i]==$str[$j])
		 	 	$count++;


		  }
		  if($count!=0)
		  	echo "$al[$i] $count\n";
	 }
}