<?php
fscanf(STDIN,"%s",$str);
$str1="";
for($i=0;$i<strlen($str);$i++)
{

	if($str[$i]!='a'&&$str[$i+1]!='a')
	{ 
		 $index=$i+1;
		$store=$str[$i];
		break;

	}
			$str1.=$str[$i];

}
 $match=str_replace('a','',$str1.$store);
 $str3="";
for($i=$index;$i<strlen($str);$i++)
{
	$str3.=$str[$i];
}
if($match==$str3)
	echo "$str1";
else
	echo ":(";