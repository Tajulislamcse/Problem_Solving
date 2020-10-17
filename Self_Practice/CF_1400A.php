<?php
fscanf(STDIN,"%d",$t);
while ($t--)
{
    fscanf(STDIN,"%d",$n);
    fscanf(STDIN,"%s",$str);
    if($n==1)
    	echo "$str\n";
    else
    {
    $str1=array();
    for ($i=0; $i <$n ; $i++)
     { 
    	 $str1[$i]=substr($str,$i,$n);


     }
     $flag=0;
     for ($i=0; $i <$n ; $i++)
      { $count=0;
     	for ($j=0; $j <$n-1 ; $j++)
     	 { 
     		if($str1[0][$i]==$str1[$j+1][$i])
     			$count++;
     		if($count==$n-1)
     		{
     			$flag=1;
     			echo str_repeat($str1[0][$i],$n)."\n";
     			
     			break;
     		}
     	 }
     	 if($flag==1)
     	 	break;
     	 //echo "count=$count\n";
      }
      if($flag==0)
      	echo str_repeat('0',$n)."\n";

    }
	
}