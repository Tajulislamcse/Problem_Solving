<?php
fscanf(STDIN,"%d",$tc);
while($tc--)
{
fscanf(STDIN,"%s",$n);
if($n<=45)
{
 if($n<=9)
 {
 	$str="123456789";
 	for ($i=0; $i <9; $i++) 
 	{ 
 		if($n==$str[$i])
 		{
 			echo "$n\n";
 			break;
 		}
 			
 	}

 }
 else
 {
 	if($n==10)
 		echo "19\n";
 	elseif($n==11)
 		echo "29\n";
 	elseif($n==12)
 		echo "39\n";
 	elseif($n==13)
 		echo "49\n";
 	elseif($n==14)
 		echo "59\n";
 	elseif($n==15)
 		echo "69\n";
 	elseif($n==16)
 		echo "79\n";
 	elseif($n==17)
 		echo "89\n";
 	elseif($n==18)
 		echo "189\n";
 	elseif($n==19)
 		echo "289\n";
 	elseif($n==20)
 		echo "389\n";
 	elseif($n==21)
 		echo "489\n";
 	elseif($n==22)
 		echo "589\n";
 	elseif($n==23)
 		echo "689\n";
 	elseif($n==24)
 		echo "789\n";
 	elseif($n==25)
 		echo "1789\n";
 	elseif ($n==26)
 	     echo "2789\n";
 	 elseif($n==27)
 	 	echo "3789\n";
 	 elseif($n==28)
 	 	echo "4789\n";
 	 elseif($n==29)
 	 	echo "5789\n";
 	 elseif($n==30)
 	 	echo "6789\n";
 	 elseif($n==31)
 	     echo "16789\n";
 	 elseif($n==32)
 	 	echo "26789\n";
 	 elseif($n==33)
        echo "36789\n";
    elseif($n==34)
    	echo "46789\n";
    elseif($n==35)
    	echo "56789\n";
    elseif($n==36)
    	echo "156789\n";
    elseif($n==37)
    	echo "256789\n";
    elseif($n==38)
    	echo "356789\n";
    elseif($n==39)
    	echo "456789\n";
    elseif($n==40)
    	echo "1456789\n";
    elseif($n==41)
    	echo "2456789\n";
    elseif($n==42)
    	echo "3456789\n";
    elseif($n==43)
    	echo "13456789\n";
    elseif($n==44)
    	echo "23456789\n";
    else
    	echo "123456789\n";


 }

}
else
 echo "-1\n";

}