<?php


$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
 // $count=0;
  //$text1="No";
  //$text2="Yes";
  fscanf(STDIN, "%d\n", $testcases);
//$number=array();
//$graph=array();
for($t=1;$t<=$testcases;$t++)

{
fscanf(STDIN, "%d %d\n", $row,$col);
//for($i=0;$i<$row;$i++)
//$graph[$i]=array();
  for($i=0;$i<$row;$i++)
  
    { $line=fgets(STDIN);
     // var_dump($line);

      for($j=0;$j<$col;$j++)
          {
             $graph[$i][$j]=$line[$j];
            echo "graph[$i][$j]=".$graph[$i][$j]."\n";
          }
        
       echo 'printed 1 row';
    }
}