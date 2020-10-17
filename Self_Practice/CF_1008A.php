<?php
$str=trim(fgets(STDIN));
$len=strlen($str);
$vowel='aeioun';
$decision=false;
if (substr_count($vowel,$str[$len-1])==1)
{
	for ($i=0; $i <$len ; $i++)
	{ 
		if (substr_count($vowel,$str[$i])=='0'&&(substr_count($vowel,$str[$i+1])=='0'||$str[$i+1]=='n'))
		{
			$decision=false;
			break;
		}
		$decision=true;
	}
	//$decision=true;
}
echo $decision?'YES':'NO';