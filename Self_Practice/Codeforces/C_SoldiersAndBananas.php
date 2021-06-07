<?php
fscanf(STDIN,"%d %d %d",$k,$n,$w);

$price=$k*(($w*($w+1))/2);
if($n>$price)
echo "0";
else{
$res=$price-$n;
echo $res;
}