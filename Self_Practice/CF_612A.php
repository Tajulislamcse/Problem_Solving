<?php
fscanf(STDIN,"%d %d %d",$n,$p,$q);
$str=trim(readline());
if($p>$q)
{
	$tmp=$q;
	$q=$p;
	$p=$tmp;
}
$i=0;
while(true)
{
   $str1=substr($str,$i,$p);
   echo "$str1\n";
   if($i>$n)
   	break;
   $i+=$p;
}
