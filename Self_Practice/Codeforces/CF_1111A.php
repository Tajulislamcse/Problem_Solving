<?php
fscanf(STDIN,"%s",$s);
$lenS=strlen($s);
fscanf(STDIN,"%s",$t);
$lenT=strlen($t);
$decision=false;
if($lenS==$lenT)
{
	$vowel="aeiou";
	$count=0;
	for ($i=0; $i <$lenS; $i++)
	 { 
		if((substr_count($vowel,$s[$i])==1&&substr_count($vowel,$t[$i])==1)||(substr_count($vowel,$s[$i])!=1&&substr_count($vowel,$t[$i])!=1))
			$count++;
		if($count==$lenS)
			$decision=true;
	 }
}
echo $decision?"YES":"NO";