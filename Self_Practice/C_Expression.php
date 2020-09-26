<?php
fscanf(STDIN,"%d",$a);
fscanf(STDIN,"%d",$b);
fscanf(STDIN,"%d",$c);
$numbers[0]=($a+$b)*$c;
$numbers[1]=($a*$b)+$c;
$numbers[2]=$a+($b*$c);
$numbers[3]=$a*($b+$c);
$numbers[4]=$a*$b*$c;
$numbers[5]=$a+$b+$c;
$max=0;
for($i=0;$i<6;$i++)
{
if($numbers[$i]>$max)
	$max=$numbers[$i];
}
echo "$max";
