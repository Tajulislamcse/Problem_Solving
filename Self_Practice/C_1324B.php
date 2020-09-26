<?php
fscanf(STDIN,"%d",$tc);
while($tc--)
{
	fscanf(STDIN,"%d",$n);
	$line=explode(" ",trim(fgets(STDIN)));
	$arr=array();
	for ($i=0; $i <$n-2 ; $i++)
	{ 
		$arr[$i]=$line[$i].$line[$i+1].$line[$i+2];
		
	}
	print_r($arr);

}
//print_r($line);