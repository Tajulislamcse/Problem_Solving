<?php
fscanf(STDIN,"%d %d",$n,$m);
$line1=trim(fgets(STDIN));
$cnvrtArrLine1=explode(" ", $line1);
//print_r($cnvrtArrLine1);
$line2=trim(fgets(STDIN));
$cnvrtArrLine2=explode(" ", $line2);
//print_r($cnvrtArrLine2);


	# code...

//print_r($concate);
fscanf(STDIN,"%d",$q);
while ($q--) {

fscanf(STDIN,"%d",$year);
$year1=$year%$n;
$year2=$year%$m;
if($year1==0)
	$year1=$n;
if($year2==0)
	$year2=$m;
echo $cnvrtArrLine1[$year1-1].$cnvrtArrLine2[$year2-1]."\n";

}