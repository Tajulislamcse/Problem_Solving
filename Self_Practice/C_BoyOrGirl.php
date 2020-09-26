<?php
$str=trim(fgets(STDIN));

$str3="";
/*
//accepted 
$arr=str_split($str,1);
//print_r($arr);


if(count(array_unique($arr))%2==1)
 echo "IGNORE HIM!";
else
	echo "CHAT WITH HER!";

*/
//Boy and girl anothe way.	
$str1=$str;
$str2='abcdefghijklmnopqrstuvwxyz';
$count=0;
for($i=0;$i<strlen($str2);$i++)
{
	for($j=0;$j<strlen($str1);$j++)
	{
		if($str2[$i]==$str1[$j])
		{
         $count++;
		}
	}
	if($count==0)
		continue;
	$str3.=$str2[$i];
	$count=0;
}
	if(strlen($str3)%2==1)
		echo "IGNORE HIM!";
	else echo "CHAT WITH HER!";
