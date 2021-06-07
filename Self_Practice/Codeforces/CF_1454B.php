<?php
fscanf(STDIN,"%d",$tc);
while($tc--)
{
	fscanf(STDIN,"%d",$len);
	$line=explode(' ',trim(fgets(STDIN)));
	$ara=array();
	foreach ($line as $value) 
	{
		if(array_key_exists($value, $ara))
			$ara[$value]++;
		else
			$ara[$value]=1;
	}
	$min=1000000000;
	$flag=0;
	foreach ($ara as $key=>$value)
	{
		if($value==1)
		 {
		 	$flag=1;
		 	if($key<$min)
		 		$min=$key;
		 }
	}
	if($flag==0)
		echo "-1\n";
	else
	{
	  echo implode(array_keys($line,$min))+1;
	  echo "\n";
	}

}