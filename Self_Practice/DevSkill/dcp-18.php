<?php


$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
//fscanf(STDIN,"%d",$t);
//while($t--)
//{
$str2=fgets(STDIN);
$parts=explode(" ",$str2);
var_dump("last:".$last=array_pop($parts));
 //$rmvspce=str_replace(' ',',',$str2);
//$str2=t(' ',$str2);
echo "\n";

// echo$last=array_pop($str2);
$str3=explode(' ',$str2,-1);
for($i=0;$i<count($str3);$i++)
   echo $str3[$i]+2 ."\n";
//var_dump($str3);
//$last=a$str2;
//echo "\n";
//$a="55";
//$b=4;
//var_dump($a);
//var_dump($b);
//echo $a-$b;

//}