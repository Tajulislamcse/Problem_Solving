<?php
fscanf(STDIN,"%d",$tc);
while($tc--)
{
		fscanf(STDIN,"%s %s %s",$n,$a,$b);
		$firstBottle=$n;
		$secndBottle=bcdiv($n,2);
		$money1=bcmul($firstBottle,$a);
		if(bcmod($n,2)==1)
		{
			$money2=bcadd(bcmul($secndBottle,$b),$a);
		}
		else
			$money2=bcmul($secndBottle,$b);
		if($money1<=$money2)
			echo "$money1\n";
		else
			echo "$money2\n";
}
