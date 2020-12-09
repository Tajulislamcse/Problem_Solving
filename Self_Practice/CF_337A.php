<?php
fscanf(STDIN,"%d %d",$n,$m);
$presents=explode(' ',trim(fgets(STDIN)));
$sort=sortValue($presents);
//print_r($sort);
$ara=array();
$flag=0;
foreach ($sort as  $value)
 {
   if(array_key_exists($value,$ara))
   {
	     $ara[$value]++;
	     if($ara[$value]==$n)
	     {
	     	$flag=1;
	     	die('0');
	     }
   }
   else
   	 $ara[$value]=1;
}
if($flag==0)
{
	$min=1000000000000;
   for ($i=$n-1,$j=0; $i <$m;$j++,$i++)
    { 

   	   $diff=$sort[$i]-$sort[$j];
   	   if($diff<$min)
   	   	  $min=$diff;
    }
    echo "$min\n";
}


function sortValue($presents)
{
	$size=count($presents);
	while($size--)
	{
		for ($i=0; $i <count($presents)-1 ; $i++)
		 { 
			if($presents[$i+1]<$presents[$i])
			{
				$presents[$i+1]=$presents[$i+1]+$presents[$i];
				$presents[$i]=$presents[$i+1]-$presents[$i];
				$presents[$i+1]=$presents[$i+1]-$presents[$i];
			}

		 }
	}
	return $presents;
}