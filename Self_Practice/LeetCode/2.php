<?php
$l1=trim(fgets(STDIN));
$l2=trim(fgets(STDIN));
if($l1<$l2)
{
	$tmp=$l1;
	$l1=$l2;
	$l2=$tmp;
}
$zero=str_repeat("0",strlen($l1)-strlen($l2));
$l2=$l2.$zero;
$carry=0;
$result="";
for ($i=0; $i <strlen($l1) ; $i++)
{ 
	$sum=$l1[$i]+$l2[$i]+$carry;
	if($sum>=10)
	{
		$carry=1;
		$sum=$sum%10;
	}
	else
		$carry=0;
	$result.=$sum;
}
return str_split($result);
