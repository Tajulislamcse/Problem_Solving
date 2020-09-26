<?php
fscanf(STDIN,"%s\n",$str);
/*
$sp="";
for($i=0;$i<strlen($str);$i++)
{
if($i==3||$i==4||$i==5||$i==6)

	continue;
echo $str[$i];
substr(string, start)
}
//echo "$sp";

//echo "$str[0]";
*/
$or='019****1919';
$s=substr_replace($str,'****',3,4);
if($s=$or)
	echo "Hi";