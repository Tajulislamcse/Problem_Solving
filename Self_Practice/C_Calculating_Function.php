<?php
fscanf(STDIN,"%s",$n);

if($n%2==0)
	echo bcdiv($n, 2);
else
echo "-".bcdiv($n, 2)-1;