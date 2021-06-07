<?php
fscanf(STDIN,"%d",$numOfstr);
$str=array();
for ($i=0; $i <$numOfstr; $i++)
{ 
	fscanf(STDIN,"%s",$str[$i]);
}
for ($i=0; $i <$numOfstr-1 ; $i++)
 {
       for ($j=0; $j <$numOfstr-1 ; $j++)
        { 
        	if(strlen($str[$j])>strlen($str[$j+1]))
        	{
        		$tmp=$str[$j];
        		$str[$j]=$str[$j+1];
        		$str[$j+1]=$tmp;
        	}
        } 
 }
 //print_r($str)."\n";
 $count=0;
 for ($i=0; $i <$numOfstr-1 ; $i++)
  { 
 	  $cnt=substr_count($str[$i+1],$str[$i]);
 	  if($cnt>=1)
 	  {
 	  	$count++;
 	  }
  }
  //echo "$count\n";

  
  if($count>=$numOfstr-1)
  {
	   echo "YES\n";
	  for ($i=0; $i <$numOfstr ; $i++) 
	   { 
	  	   echo "$str[$i]\n";
	   }
  }
  else
  	echo "NO\n";
  	