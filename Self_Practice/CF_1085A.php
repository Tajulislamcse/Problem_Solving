<?php
$str=trim(fgets(STDIN));
$length=strlen($str);
if($length==1)
  echo "$str";
else
{
	
$fChar=(int)(ceil($length/2)-1);
$resultStr="";
$inc=$fChar;
$dec=$fChar;
$resultStr.=$str[$fChar];

for ($i=0; $i <$length-1 ; $i++) 
{ 
	if($i%2==0)

		$resultStr.=$str[++$inc];
	else
		$resultStr.=$str[--$dec];
}
echo "$resultStr";
}