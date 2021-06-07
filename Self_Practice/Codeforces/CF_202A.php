<?php
$max=0;
$str=readline();
for ($i=0; $i <strlen($str) ; $i++) 
{ 
	if(ord($str[$i])>$max)
	{
		$max=ord($str[$i]);
		$char=$str[$i];

	}
}
$ans="";
for ($i=0; $i <strlen($str) ; $i++)
{ 
	if($char==$str[$i])
		$ans.=$str[$i];
}
echo "$ans";
