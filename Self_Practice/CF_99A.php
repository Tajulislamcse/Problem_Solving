<?php
fscanf(STDIN,"%s",$num);
$intPart="";
for ($i=0; $i <strlen($num) ; $i++)
 { 
	if($num[$i]=='.')
	{   
		$lastChar=$num[$i-1];
		$fraction=$num[$i+1];
		break;
	}
	$intPart.=$num[$i];

 }
//echo "$lastChar\n$fraction\n$intPart\n";
if($lastChar!=9&&$fraction<5)
{
   echo "$intPart";	
}
elseif ($lastChar!=9&&$fraction>=5)
 {
	echo bcadd($intPart,1);
 }
 else
 	echo "GOTO Vasilisa.";
