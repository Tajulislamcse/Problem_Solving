
  //another approach is done in comment ;

<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $number);
$items=array();

for($i=0;$i<$number;$i++)

fscanf(STDIN, "%d\n", $items[$i]);
//for($i=0;$i<$number;$i++)
for($i=0;$i<$number;$i++)


{
    //for($j=0;$j<$number-1;$j++)
    for($j=0;$j<$number;$j++)
       {
        // if($items[$j]>$items[$j+1])
        echo"$items[$i]<$items[$j]\n";

        if($items[$i]<$items[$j])
           {
            //echo $items[$i]<$items[$j]."\n";

           //$items[$j]=$items[$j]+$items[$j+1];

           $items[$i]=$items[$i]+$items[$j];

           //$items[$j+1]=$items[$j]-$items[$j+1];
           $items[$j]=$items[$i]-$items[$j];

           //$items[$j]=$items[$j]-$items[$j+1];
           $items[$i]=$items[$i]-$items[$j];
         }
       }
}
//var_dump($items);
echo "after sorting\n";
for($i=0;$i<$number;$i++)
 echo "$items[$i]\n";
