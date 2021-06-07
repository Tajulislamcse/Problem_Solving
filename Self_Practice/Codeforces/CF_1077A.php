<?php
fscanf(STDIN,"%d",$tc);
while($tc--)
{
	fscanf(STDIN,"%s %s %s",$a,$b,$k);
	 $right=bcmul(bcdiv(bcadd($k,1),2),$a);
	 $left=bcmul(bcdiv($k,2),$b);
	 echo bcsub($right,$left)."\n";

}