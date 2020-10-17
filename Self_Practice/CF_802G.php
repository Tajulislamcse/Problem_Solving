<?php
$str=trim(fgets(STDIN));
$word="hello";
$cnt=0;
for ($i=0; $i <strlen($str) ; $i++) 
   {
   	   if($str[$i]==$word[$cnt])

           $cnt++;

   }
   echo $cnt==5?"YES":"NO";