<?php
fscanf(STDIN,"%d",$n);
$array=[
	0=>4,
	1=>7,
	2=>47,
	3=>74,
	4=>447,
	5=>474,
	6=>477,
	7=>744,
	8=>774

];
$flag=0;
for($i=0;$i<count($array);$i++)
{
	if(($n%$array[$i])==0)
	{
		echo "YES";
		$flag=1;
		break;
	}
}
if($flag==0)
echo "NO";