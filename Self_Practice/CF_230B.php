<?php
fscanf(STDIN,"%d",$n);
$numbers=explode(' ',trim(fgets(STDIN)));
for ($i=0; $i <$n ; $i++)
 {       
 	    $cnt=0;
		for ($j=2; $j <=bcdiv($numbers[$i],2); $j++)
		 { 
		 	if(bcmod($numbers[$i],$j)==0)
		 	{
		 		$cnt++;
		 	}
		 }
		 if($cnt==1)
		 	echo "YES\n";
		 else
		 	echo "NO\n";
}
