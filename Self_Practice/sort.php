<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
 // $count=0;
  //$text1="No";
  //$text2="Yes";
  fscanf(STDIN, "%d", $testcases);
//$number=array();
//$graph=array();
for($t=1;$t<=$testcases;$t++)

{
fscanf(STDIN, "%d\n", $number);
//for($i=0;$i<$row;$i++)
//$graph[$i]=array();
  for($i=0;$i<$number;$i++)
     fscanf(STDIN, "%d", ($items[$i]));
    
for($i=0;$i<$number;$i++)
   {
     for($j=0;$j<$number-1;$j++)
     {
         if($items[$i]<$items[$j])

          {
              $temp=$items[$i];
              $items[$i]=$items[$j];
              $items[$j]=$temp;
          }
            

     }
   }
   echo "after sorting"."\n";
   for($i=0;$i<$number;$i++)
      fprintf(STDOUT,"%d,",$items[$i]);
      echo"\n";
}