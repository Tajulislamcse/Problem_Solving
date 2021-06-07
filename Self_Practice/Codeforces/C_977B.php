<?php
fscanf(STDIN,"%d",$lenth);
fscanf(STDIN,"%s",$str);
//echo substr_count($str,'BA');
for($i=0;$i<$lenth-1;$i++)
{
   $str1[$i]=$str[$i].$str[$i+1];
}
$cnt=array_count_values($str1);
arsort($cnt);
//print_r(current(array_keys(array_count_values($str1))));
print_r(current(array_keys($cnt)));