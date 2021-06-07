<?php
fscanf(STDIN,"%d",$n);
$x=explode(' ',trim(fgets(STDIN)));
$y=explode(' ',trim(fgets(STDIN)));
$sum=($n*($n+1))/2;
$ara1=array();
for ($i=1,$j=0; $i <count($x) ; $i++) 
{ 
	$ara1[$j++]=$x[$i];
}
for ($i=1,$j=count($ara1); $i <count($y) ; $i++) 
{ 
	$ara1[$j++]=$y[$i];
}
$ara2=array();
foreach ($ara1 as $value) 
{
	if(array_key_exists($value,$ara2))
		$ara2[$value]++;
	else
		$ara2[$value]=1;

}
$sum2=0;
foreach ($ara2 as $key => $value) 
{
	$sum2+=$key;
}
if($sum2>=$sum)
echo "I become the guy.";
else
echo "Oh, my keyboard!";



