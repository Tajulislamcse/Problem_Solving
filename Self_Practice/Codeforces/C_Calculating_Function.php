<?php
fscanf(STDIN,"%s",$n);

if(bcmod($n,2)==0)
	echo bcdiv($n, 2);
else
echo "-".bcdiv(bcadd($n,1), 2);