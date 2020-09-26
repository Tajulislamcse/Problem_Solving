<?php
$str1=trim(fgets(STDIN));
$str2="abcdefghijklmnopqrstuvwxyz";

$str3="";
for($i=0;$i<strlen($str2);$i++)
{
	for($j=0;$j<strlen($str1);$j++)
	{
		if($str2[$i]==$str1[$j])
		{
			$str3.=$str1[$j];
			break;
		}
	}
}
	if(strlen($str3)%2==1)
		echo "IGNORE HIM!";
	else echo "CHAT WITH HER!";