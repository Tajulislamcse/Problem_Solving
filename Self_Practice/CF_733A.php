<?php
fscanf(STDIN,"%s",$str);
$len=strlen($str);
if($len==1)
{
	   echo "1";
}
else
{
		$vowel="AEIOUY";
		$pos=array();
		$pos[0]=1;
		for ($i=0,$j=1; $i <$len ; $i++)
		 { 
			   if(substr_count($vowel,$str[$i])==1)
			   {
		           $pos[$j]=$i;
		           $j++;
			   }
		 }
		 $max=0;
		 for ($i=0; $i <count($pos)-1 ; $i++)
		  { 
		  	$dis=$pos[$i+1]-$pos[$i];
		 	if($dis>$max)
		 		$max=$dis;
		  }
		  echo "$max";
}		  