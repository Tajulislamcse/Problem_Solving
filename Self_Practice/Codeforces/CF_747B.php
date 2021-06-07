<?php
fscanf(STDIN,"%d",$lenOfStr);
fscanf(STDIN,"%s",$str);
$decision=false;

if($lenOfStr%4==0)
 {
 	 $a=0;
 	 $g=0;
 	 $c=0;
 	 $t=0;
     $split=str_split($str);
     for ($i=0; $i <count($split) ; $i++)
      { 
     	   if($split[$i]=='A')
     	   	   $a++;
     	   	elseif ($split[$i]=='G')
     	   	 {
     	   		$g++;
     	   	 }
     	   	elseif ($split[$i]=='C')
     	   	 {
     	   		$c++;
     	   	 }
     	   	 else
     	   	 {
     	   	 	if($split[$i]=='T')
     	   	 		$t++;
     	   	 }

      }
      $div=$lenOfStr/4;
      if($div<$a||$div<$g||$div<$c||$div<$t)
      	  $decision=false;
       //$loop=$div;
       else
       {    
       	    
       	    while($a<$div)
       	    {
       	    	for ($i=0; $i <strlen($str) ; $i++)
       	    	 { 
       	    		if($str[$i]=='?')
       	    		{
       	    			$str[$i]='A';
       	    			break;
       	    		}
       	    	 }
       	    	$a++;
       	    }
       	    while($c<$div)
       	    {
       	    	for ($i=0; $i <strlen($str) ; $i++)
       	    	 { 
       	    		if($str[$i]=='?')
       	    		{
       	    			$str[$i]='C';
       	    			break;
       	    		}
       	    	 }
       	    	$c++;
       	    }
       	    while($g<$div)
       	    {
       	    	for ($i=0; $i <strlen($str) ; $i++)
       	    	 { 
       	    		if($str[$i]=='?')
       	    		{
       	    			$str[$i]='G';
       	    			break;
       	    		}
       	    	 }
       	    	$g++;
       	    }
       	    while($t<$div)
       	    {
       	    	for ($i=0; $i <strlen($str) ; $i++)
       	    	 { 
       	    		if($str[$i]=='?')
       	    		{
       	    			$str[$i]='T';
       	    			break;
       	    		}
       	    	 }
       	    	$t++;
       	    }
       	    
       	    //echo "$str";
        	$decision=true;
       }
 }
 echo $decision?"$str":"===";
