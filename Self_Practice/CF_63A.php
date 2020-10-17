<?php
fscanf(STDIN,"%d",$n);
$name=array();
$status=array();
$rat=array();
$womanChild=array();
$man=array();
$captain=array();
$r=0;
$wc=0;
$m=0;
$c=0;
for ($i=0; $i <$n; $i++)
 { 
	fscanf(STDIN,"%s %s",$name[$i],$status[$i]);
	if($status[$i]=='rat')
		$rat[$r++]=$name[$i];
	elseif ($status[$i]=='woman'||$status[$i]=='child')
	{
		$womanChild[$wc++]=$name[$i];
	}
	elseif ($status[$i]=='man')
	 {
		$man[$m++]=$name[$i];
	 }
	 else
	 	$captain[$c++]=$name[$i];

 }
 for($i=0;$i<count($rat);$i++)
 echo "$rat[$i]\n";
for($i=0;$i<count($womanChild);$i++)
 echo "$womanChild[$i]\n";
for($i=0;$i<count($man);$i++)
 echo "$man[$i]\n";
for($i=0;$i<count($captain);$i++)
 echo "$captain[$i]\n";