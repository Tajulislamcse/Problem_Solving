<?php
fscanf(STDIN,"%d %d %d",$d1,$d2,$d3);
if($d1>=$d2)
{
	$min=$d2;
	$store=$d1;
}
else
{
	$min=$d1;
	$store=$d2;
}
if($d1+$d2>=$d3)
$min1=$d3;
else
$min1=$d1+$d2;
echo $min+$store+$min1;