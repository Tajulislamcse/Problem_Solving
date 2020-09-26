<?php

fscanf(STDIN,"%d",$n);
series($n);
function series($n)
{
   if($n<0)
   	return;

   	series($n-2);
   	     echo "$n";

}


