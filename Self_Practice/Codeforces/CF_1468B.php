<?php
fscanf(STDIN,"%d",$tc);
while ($tc--) 
{
	fscanf(STDIN,"%d %d %d",$c1,$c2,$c3);
	fscanf(STDIN,"%d %d %d %d %d",$a1,$a2,$a3,$a4,$a5);
	if($c1-$a1<0)
		echo "NO\n";
	elseif($c2-$a2<0)
		echo "NO\n";
	elseif($c3-$a3<0)
		echo "NO\n";
	else
	{
		$left1=0;
      $left=$c1-($a1+$a4);
      if($left<0)
      	$left1=abs($left);
      $right2=0;
      $right=$c2-($a2+$a5);
      if($right<0)
          $right2=abs($right);
      //$left2=abs($c2-($a2+$a5));
      if($c3-($right2+$left1+$a3)<0)
      	echo "NO\n";
      else
      	echo "YES\n";


	}

}