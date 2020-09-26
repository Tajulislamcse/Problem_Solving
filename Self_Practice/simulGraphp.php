<?php
$stdin=fopen('php://stdin','r');
$stdout=fopen('php://stdout','w');


fscanf(STDIN,"%d",$n);
fscanf(STDIN,"%d",$e);

$graph=array();
for($i=0;$i<$n;$i++){
    $graph[$i]=array();
}
for($i=0;$i<$e;$i++){
    fscanf(STDIN,"%s%s",$x,$y);
    $row=ord($x[0])-ord('A');
    $col=ord($x[0])-ord('A');

    $graph[$row][$col]=1;
    $graph[$col][$row]=1;
}

print_r($graph);