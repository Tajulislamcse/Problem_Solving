<?php
$k=readline();
$str=str_split(trim(fgets(STDIN)));
$ara=array();
foreach ($str as $value)
 {
	if(array_key_exists($value,$ara))
		$ara[$value]++;
	else
		$ara[$value]=1;

 }
 $someStr="";
 for ($i=0; $i <$k ; $i++)
  { 
  	foreach ($ara as $key => $value) 
  	{
  		if($value%$k!=0)
  		{
  			echo "-1";
  			die();
  		}
  		for ($j=0; $j <$value/$k ; $j++) 
  		{ 
  			$someStr.=$key;
  		}
  	}

  }
  echo "$someStr";
