<?php
fscanf(STDIN,"%d",$n);
 echo sumToN($n);
function sumToN($n)
{
	if($n==0)
		return 0;
	else
        return $n+sumToN($n-1);
}      