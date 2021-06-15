<?php
$nums=explode(' ',readline());
$nonZeroPos=0;
$ans=[];
$zero=0;
for ($i=0; $i <count($nums) ; $i++)
 { 
	if($nums[$i]!='0')
	{
		$ans[$nonZeroPos++]=$nums[$i];
	}
	else
		$zero++;
 }
$last=count($nums)-1;

while($zero--)
{
	$ans[$last--]='0';
}
return $ans;