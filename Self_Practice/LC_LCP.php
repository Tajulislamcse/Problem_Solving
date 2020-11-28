<?php
$strs=explode(',',trim(fgets(STDIN)));
echo longestCommonPrefix($strs);
    function longestCommonPrefix($strs)
    {
     if(count($strs)==0)
         return "";
     elseif(count($strs)==1)
     	return $strs[0];
      else
      {   
           
     $min=1000000000000000;
     for ($i=0; $i <count($strs) ; $i++)
      { 
            if(strlen($strs[$i])<$min)
            {
                $min=strlen($strs[$i]);
                $minStr=$strs[$i];
                //echo "$min\n";

            }
      }	
     $str="";
    for ($i=0; $i <strlen($minStr) ; $i++) 
    { 
    	$count=0;
    	for ($j=1; $j <count($strs) ; $j++)
    	 { 
    		if($minStr[$i]==$strs[$j][$i])
    		 {	
    			$count++;
    			if($count==count($strs)-1)
                 {
                 	$str.=$strs[$j][$i];
                 }
    		 }	
    	 }
    }
        if(strlen($str)==0)
            return "";
        else
            return "$str";
      }   
        
    }

