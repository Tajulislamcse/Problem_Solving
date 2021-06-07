<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN,"%d\n",$n);
for($i=0;$i<$n;$i++)
{
    list($a[$i],$b[$i],$c[$i],$d[$i])=explode(" ",trim(fgets(STDIN)));
    if($a[$i]=="Shuvo")
       echo"Shuva naya barsha ".($d[$i]+650)."\n";
     else echo"Shuvo nobo borsho ".($d[$i]-650)."\n";

}
