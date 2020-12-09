<?php
fscanf(STDIN,"%d",$n);
$ara=explode(" ",trim(fgets(STDIN)));
$max=0;
$maxSegment=1;
$max=1;
$j=0;
for ($i=0; $i <count($ara) ; $i++) 
 { 
		if($i<count($ara)-1&&$ara[$i]<=$ara[$i+1])
		{
	      $maxSegment++;
		}
		else
		{
			if($maxSegment>$max)
				$max=$maxSegment;
			$maxSegment=1;
		}


}
 echo $max;