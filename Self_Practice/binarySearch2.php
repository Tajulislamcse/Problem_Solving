<?php
$ara=explode(' ',trim(fgets(STDIN)));
fscanf(STDIN,"%d",$searchValue);
$start=0;
$end=count($ara)-1;
$flag=0;
while ($start<=$end)
 {
   $mid=floor(($start+$end)/2);
   if($searchValue==$ara[$mid])
   	  {
   	  	$flag=$mid;
   	  	fprintf(STDOUT,"loc=%d",$mid+1);
   	  	break;
   	  }
   	 elseif ($searchValue>$ara[$mid])
   	  {
   	 	$start=$mid+1;
   	 }
   	 else
   	 {
   	 	$end=$mid-1;
   	 }

	
 }
 if($flag==0)
 echo "404 Not found searched index";
