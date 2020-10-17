<?php
$pass=trim(fgets(STDIN));
fscanf(STDIN,"%d",$n);
$flag=0;
for ($i=0; $i <$n ; $i++)
 { 
	# code...
	$str[$i]=trim(fgets(STDIN));
 if($pass==$str[$i]||$pass==strrev($str[$i]))
   $flag=1;
 }
 if($flag==1)
 	echo "YES";
 
 	
 else
 { 
 	
  $flag=0;
   for ($i=0; $i <$n ; $i++)
 	{ 
 		    if($pass[0]==$str[$i][1])
 		    {
			 	for($j=0; $j <$n ; $j++)
			 		{ 
			 			if($pass[1]==$str[$j][0])
			 			{
			 				$flag=1;
			 				echo "YES";
			 				break;
			 			}

			 		}
			 	if($flag==1)
			 	    break;	
 		    }
	}
	if($flag==0)
		echo "NO";

 	
}
