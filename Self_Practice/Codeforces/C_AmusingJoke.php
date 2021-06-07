<?php
fscanf(STDIN,"%s",$guest);
fscanf(STDIN,"%s",$host);
fscanf(STDIN,"%s",$suffledString);
$count=0;
$str1="";
$str2="";

$letters="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$concate=$guest.$host;
if(strlen($concate)!=strlen($suffledString))
	echo "NO";

  else
  {
  	for($i=0;$i<strlen($letters);$i++)
  	{
  		$count=0;
  		for($j=0;$j<strlen($concate);$j++)
  		{
           if($letters[$i]==$concate[$j])
           {
             
            $count++;
           }
  		}
  		if($count==0)
  			continue;
  		$str1.=$count;
  	   //echo $sum1[$i];
  		//echo $letters[$i]." ".$count." ";

  	}
  	//echo "$str1";
  	//echo "\n";

  	for($i=0;$i<strlen($letters);$i++)
  	{
  		$count=0;
  		for($j=0;$j<strlen($suffledString);$j++)
  		{
           if($letters[$i]==$suffledString[$j])
           {
             
             $count++;
           }
  		}
  		if($count==0)
  			continue;
  		
  		 //echo $letters[$i]." ".$count." ";
  		$str2.=$count;
  		// echo $sum2[$i];

  	}
  	if($str1==$str2)
  		echo "YES";
  	else
  		echo "NO";
  	
  	//echo "$str2";
  	
  	
  }