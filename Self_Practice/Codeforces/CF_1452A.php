<?php
fscanf(STDIN,"%d",$tc);
while($tc--)
{
fscanf(STDIN,"%s",$str);
$len=strlen($str);
$frstLeft=0;
$scndLeft=0;
$cnt1=0;
$cnt2=0;
for ($i=0; $i <$len ; $i++)
 { 
	if($str[$i]=='(')
		$frstLeft++;
	elseif($str[$i]=='[')
		$scndLeft++;
	elseif($frstLeft>0&&$str[$i]==')')
	{
		$cnt1++;
		$frstLeft--;

	}
	elseif($scndLeft>0&&$str[$i]==']')
	{
		$cnt2++;
		$scndLeft--;
	}

 }
 echo $cnt1+$cnt2."\n";
}