<?php

while ($input=trim(fgets(STDIN))) 
{ 
   
	$arr=explode(',',$input);
    
    $str1=$arr[0];
    $revstr1=strrev($str1);
	$length1=strlen($revstr1);
	
	$str2=$arr[1];
  $revstr2=strrev($str2);
	$length2=strlen($revstr2);
		if($length1>$length2)
	{
		$temp=$revstr1;
		$revstr1=$revstr2;
		$revstr2=$temp;

   }	
   
   $dflength=$length2-$length1;
	
        $add=str_repeat("0",abs($dflength));
        $revstr1=$add.$revstr1;
   
	
	   $result="";
  
     $carry=0;
    for ($i=strlen($revstr2)-1; $i >=0 ; $i--) 
    { 
       $sum=((ord($revstr1[$i])-48)+(ord($revstr2[$i])-48)+$carry);
       
       	$resultpurpose=$sum%10;
       	
       if ($sum>10) 
       {
       	$carry=(int)($sum/10);
       	
       }
       else 
       	$carry=(int)($sum/10);

        $result.=$resultpurpose;

    }
    if($carry)
    {
    $result=$result.$carry;
    }
		echo ltrim($result,"0")."\n";
    
}