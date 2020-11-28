<?php
fscanf(STDIN,"%s",$str);
$len=strlen($str);
$cnt=0;
for ($i=0; $i <$len ; $i++) 
{ 
     if(ord($str[$i])>=65&&ord($str[$i])<=90)
     	$cnt++;
}
if($cnt==$len)
	echo strtolower($str);
elseif (($cnt==$len-1)&&(ord($str[0])>=97&&ord($str[0])<=122))
{
	echo strtoupper($str[0]).strtolower(substr($str,1));
}
else
  echo "$str";