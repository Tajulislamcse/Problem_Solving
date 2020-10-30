<?php
fscanf(STDIN,"%d",$n);
$root=sqrt($n);
if($root==floor($root))
	echo "$root $root";
else
{
		$j=0;
		$quotient=array();
		for ($i=1; $i <=ceil($n/2); $i++)
		 { 
			$factor=$n/$i;
			if($factor==floor($factor))
			{
				$quotient[$j++]=$factor;
			}
		 }

		 $quotient[count($quotient)]=1;
		 //print_r($quotient);
		 if(count($quotient)==2)
		 	echo "$quotient[1] $quotient[0]\n";
		 else
		 {
		   $maxDif=10000000;

		 	for ($i=0; $i <count($quotient) ; $i++) 
		 	{ 
		 		 for ($j=0; $j <count($quotient) ; $j++)
		 		  { 
		 		 	  if($quotient[$i]*$quotient[$j]==$n)
		 		 	  {
		 		 	  	$dif=abs($quotient[$i]-$quotient[$j]);
		 		 	  	  if($dif<$maxDif)
		 		 	  	  {
		 		 	  	  	$maxDif=$dif;
		 		 	  	  	 $targetValue="$quotient[$j] $quotient[$i]";
		 		 	  	  }
		 		 	  }
		 		 }
		 	}
		 	echo "$targetValue\n";
		 }
}
