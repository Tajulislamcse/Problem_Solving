<?php
fscanf(STDIN,"%d",$sizeOfArr);
$arr=explode(' ',trim(fgets(STDIN)));
$targetArr=array();
$targetArr[0]=$arr[$sizeOfArr-1];
$k=1;
for ($i=$sizeOfArr-2; $i>=0 ; $i--)
 { 
 	   $count=0;

	  for ($j=0; $j <count($targetArr) ; $j++)
	   {       
		   	if($targetArr[$j]!=$arr[$i])
	   	    {
	   	    	$count++;
	   	    	
	   	    	if($count==count($targetArr))
	   	    	{
	   	 
	   	    	  $targetArr[$k++]=$arr[$i];
	   	    	}
	   	    }
       }
 }
 echo count($targetArr)."\n";
for ($i=count($targetArr)-1; $i>=0 ; $i--)
{
	if($i==0)
		echo "$targetArr[$i]";

    else
    	echo $targetArr[$i].' ';
}