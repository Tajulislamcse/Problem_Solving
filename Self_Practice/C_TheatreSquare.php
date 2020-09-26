<?php
fscanf(STDIN,"%d %d %d",$n,$m,$a);
if($n%$a==0)
	$x=$n/$a;
else $x=ceil($n/$a);

if($m%$a==0)
	$y=$m/$a;
else $y=ceil($m/$a);

echo bcmul($x, $y);