<?php
$strs=explode(" ",trim(fgets(STDIN)));
for ($i=0; $i <count($strs)-1 ; $i++)
{ 
	for ($j=0; $j <count($strs)-1 ; $j++)
	 { 
		if(strlen($strs[$j+1])<strlen($strs[$j]))
		{
			$tmp=$strs[$j+1];
			$strs[$j+1]=$strs[$j];
			$strs[$j]=$tmp;
		}
	}
}
$minStr=$strs[0];
$minLength=20000;
for ($i=1; $i <count($strs) ; $i++)
{  
    $str="";

	for ($j=0; $j <strlen($minStr) ; $j++)
	{ 
		if($minStr[$j]==$strs[$i][$j])
		{
			$str.=$minStr[$j];
			
		}
		else
			break;

	}
	if(strlen($str)<$minLength)
	 {
		$minLength=strlen($str);
		$newStr=$str;


	 }


	
}
echo "$newStr\n";
