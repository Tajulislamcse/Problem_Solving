<?php
$nums=explode(' ',readline());
$n=count($nums)-1;
while($n--)
{
for($i=0;$i<count($nums)-1;$i++)
   {
      if($nums[$i]=='0')
      {
         $tmp=$nums[$i];
         $nums[$i]=$nums[$i+1];
         $nums[$i+1]=$tmp;
      }
   }
}
print_r($nums);