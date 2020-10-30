<?php
fscanf(STDIN,"%s",$n);
$sum=bcdiv(bcmul($n,bcadd($n,1)),2);
if(bcmod($sum,2)==0)
   echo 0;
else
	echo 1;