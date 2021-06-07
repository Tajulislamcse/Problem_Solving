<?php
fscanf(STDIN,"%s",$str);
$unqDigit=array();
$unqDigit[0]=$str[0];
$k=1;
for($i=1;$i<strlen($str);$i++)
{ 
	$cnt=0;
	for($j=0;$j<count($unqDigit);$j++)
	{
		if($unqDigit[$j]!=$str[$i])
		{
			$cnt++;
			if($cnt==count($unqDigit))
			{
				$unqDigit[$k++]=$str[$i];
			}
		}
	}
}
$str1="";
for ($i=0; $i <count($unqDigit) ; $i++)
 { 
    $count=0;

	for ($j=0; $j <strlen($str) ; $j++)
	 { 
		if($unqDigit[$i]==$str[$j])
			$count++;
	 }
	 $str1.=$count$unqDigit[$i];
}
return $str1;