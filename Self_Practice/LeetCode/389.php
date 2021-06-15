<?php
$t=trim(fgets(STDIN));
$s=trim(fgets(STDIN));
$v=[];
for($i=0;$i<strlen($t);$i++)
{
	$v[$t[$i]]=1;
}
$unique_t="";
foreach($v as $key=>$value)
{
	$unique_t.=$key;
}
for ($i=0; $i <strlen($unique_t) ; $i++) 
{ 
	$tCharCnt=countOccurByt($unique_t[$i],$t);
	
	$sCharCnt=countOccurBys($unique_t[$i],$s);
	if($tCharCnt-$sCharCnt==1)
		echo $unique_t[$i];
	

}
function countOccurByt($char,$t)
{  
	$cnt=0;
	for ($i=0; $i <strlen($t) ; $i++) 
	{ 
		if($char==$t[$i])
			$cnt++;
	}
	return $cnt;
}
function countOccurBys($char,$s)
{  
	$cnt=0;
	for ($i=0; $i <strlen($s) ; $i++) 
	{ 
		if($char==$s[$i])
			$cnt++;
	}
	return $cnt;
}