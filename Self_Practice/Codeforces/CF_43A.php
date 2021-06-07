<?php
fscanf(STDIN,"%d",$n);
$teams=array();
for ($i=0; $i <$n ; $i++)
 { 
	$teams[$i]=trim(fgets(STDIN));

 }
 if(count($teams)==1)
 	echo "$teams[0]";
 else
 {

 $unique[0]=$teams[0];
 for ($i=1; $i <count($teams)-1 ; $i++)
 { 
 	if($unique[0]!=$teams[$i])
 	{
 		$unique[1]=$teams[$i];
 		break;
 	}

 }
 
//$unique=array_unique($teams);
 	//echo $unique[1]."hi\n";

//print_r($unique);

$fG=0;
$sG=0;
for ($i=0; $i <count($teams) ; $i++)
 { 
	if($unique[0]==$teams[$i])
		$fG++;
	else
		$sG++;
 }
 if($fG>$sG)
 	echo $unique[0];
 else
 	echo $unique[1];
}