<?php
fscanf(STDIN,"%d",$sizeOfArr);
$arr=explode(' ',trim(fgets(STDIN)));
for ($i=0; $i <$sizeOfArr ; $i++)
 {     
        if($arr[$i]%2==0)
        	$arr[$i]=$arr[$i]-1;
 	  if($i==$sizeOfArr-1)
        echo "$arr[$i]";
       else
         echo "$arr[$i] ";

 }
 //print_r($arr);