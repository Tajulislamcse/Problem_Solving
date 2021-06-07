<?php
fscanf(STDIN,"%d",$n);
$line=explode(' ',trim(fgets(STDIN)));
//print_r($line);
$minusCount=0;
$plusCount=0;
$zeroCount=0;
for ($i=0; $i <$n ; $i++)
{ 
	if($line[$i]<0)
		$minusCount++;
	elseif ($line[$i]>0)
	 {
		$plusCount++;
	 }
	 else
	 	$zeroCount++;
}
fprintf(STDOUT,"%.6f\n",($plusCount/$n));
fprintf(STDOUT,"%.6f\n",($minusCount/$n));
fprintf(STDOUT,"%.6f\n",($zeroCount/$n));

