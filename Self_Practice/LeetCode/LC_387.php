<?php
$str=trim(fgets(STDIN));
$split=str_split($str);
$v=array();
foreach ($split as $value) 
{
	if(array_key_exists($value,$v))
		$v[$value]++;
	else
		$v[$value]=1;
}
$first=-1;
$flag=0;
foreach ($v as $key => $value)
{
	if($value==1)
	{
		$flag=1;
		$first=$key;
		break;
	}
}
if($flag==1)
echo implode(array_keys($split,$first));
else
echo "-1";