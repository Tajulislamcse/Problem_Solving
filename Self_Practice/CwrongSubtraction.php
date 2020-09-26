<?php

fscanf(STDIN,"%d %d",$n,$k);
for ($i=0; $i <$k ; $i++) 
{ 
	$ldigit=$n%10;
	if ($ldigit!=0)
	 {
		$n=$n-1;
	}
	else $n=$n/10;

}
echo "$n";