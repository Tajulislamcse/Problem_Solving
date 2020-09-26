<?php
echo "how much number do you want to enter:";
fscanf(STDIN,"%d",$n);
for ($i=0; $i <$n ; $i++)
 { 
   fscanf(STDIN,"%d",$arr[$i]);
}
for ($i=0; $i <$n ; $i++) { 
	for ($j=0; $j <$n-1 ; $j++) 
	{ 
	  if ($arr[$i]<$arr[$j]) 
	  {
	  	 $arr[$i]=$arr[$i]+$arr[$j];
	  	 $arr[$j]=$arr[$i]-$arr[$j];
	  	 $arr[$i]=$arr[$i]-$arr[$j];
	  }
	}
}
echo "after sorting\n";
//for ($i=0; $i <$n ; $i++) { 
$s=$n-2;
	echo "2nd highest number=$arr[$s]";
	# code...
