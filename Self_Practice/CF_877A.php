<?php
$str=trim(readline());
$names=array();
$names=[
	        "Danil",
	        "Olya",
	        "Slava",
	        "Ann",
	        "Nikita"
       ];
$count=0;
 for ($i=0; $i <count($names) ; $i++) 
 { 
 		$name=$names[$i];
 		$count+=substr_count($str,$name);
 			//$count++;
		
              
} 
if($count==1)
  echo "YES";
  else
  echo "NO";    


 
