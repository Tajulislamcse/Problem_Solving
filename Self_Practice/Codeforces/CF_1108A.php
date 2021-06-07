<?php
fscanf(STDIN,"%d",$tc);
while($tc--)
{
	fscanf(STDIN,"%s %s %s %s",$l1,$r1,$l2,$r2);
	$a=bcdiv(bcadd($l1,$r1),2);
	$b=bcdiv(bcadd($l2,$r2),2);
	if($a==$b)
		echo bcadd($a,1).' '.$b."\n";
	else
		echo "$a $b\n";
	/*
	if($l1!=$l2)
		echo "$l1 $l2\n";
	elseif ($r1!=$r2) 
	{
		echo "$r1 $r2\n";
		
	}
	else
	    {
		if(($a>=$l1||$a<=$r1)&&($b>=$l2||$b<=$r2)&&($a!=$b))
		echo "$a $b\n";
	
         }
         */


}