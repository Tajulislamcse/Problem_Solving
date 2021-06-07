<?php
    fscanf(STDIN,"%d",$n);
    fscanf(STDIN,"%s",$str);
    $i=0;
    while($i <$n) 
    { 
    	if($i<$n-2&&$str[$i]=='o'&&$str[$i+1]=='g'&&$str[$i+2]=='o')
    	{
           echo "***";
           $i+=3;
           while($i<$n-1&&$str[$i]=='g'&&$str[$i+1]=='o')
           	$i+=2;
        }
        else
        {
        	echo "$str[$i]";
        	$i++;
        }
     
    }                                            