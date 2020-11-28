<?php
$words=explode(",",trim(fgets(STDIN)));
echo stringMatching($words);
function stringMatching($words)
{
$arrSize=count($words);
while($arrSize--)
  {
  	   for ($i=0; $i <count($words)-1 ; $i++)
  	    { 
  	   	     if(strlen($words[$i])<strlen($words[$i+1]))
  	   	     	 {
  	   	     	 	$tmp=$words[$i];
  	   	     	 	$words[$i]=$words[$i+1];
  	   	     	 	$words[$i+1]=$tmp;
  	   	     	 }
  	    }
  }
  $substr=array();
  $k=0;
  for ($i=0; $i <count($words) ; $i++) 
  { 
  	for ($j=$i+1; $j <count($words) ; $j++) 
  	{ 
  		if(substr_count($words[$i],$words[$j])>=1)
  			$substr[$k++]=$words[$j];
  	}
  }
  if(count($substr)==0)
  	return [];
  else
  {
		  $unq=array();
		  $k=1;
		  $unq[0]=$substr[0];
		  for ($i=1; $i <count($substr) ; $i++)
		  {   $cnt=0;
		  	  for ($j=0; $j <count($unq) ; $j++)
		  	   { 
		  	  	    if($unq[$j]!=$substr[$i])
		  	  	    	$cnt++;
		  	  	    if($cnt==count($unq))
		  	  	    	$unq[$k++]=$substr[$i];

		  	   }
		  }

  return $unq;

  }
  }  
    
