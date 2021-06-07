<?php
fscanf(STDIN,"%d",$sizeOfArr);
$arr=explode(" ",trim(fgets(STDIN)));
$max=0;
for ($i=0; $i <$sizeOfArr ; $i++) 
{ 
	 $cnt=0;
	 for ($j=0; $j <$sizeOfArr ; $j++)
	  { 
	 	  if($arr[$i]==$arr[$j])
	 	  	  $cnt++;
	  }
	  if($cnt>$max)
	  	 $max=$cnt;

}
echo "$max\n";
