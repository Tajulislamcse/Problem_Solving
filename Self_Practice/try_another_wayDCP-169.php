<?php

//system("stty -icanon");

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d %d\n", $row,$col);

for($i=0;$i<$row;$i++)
  {
     $line=fgets(STDIN);
      for($j=0;$j<$col;$j++)
          {
             //while($graph[$i][$j]=fread(STDIN,1));
          // echo "graph[$i][$j]=".$graph[$i][$j];
          $graph[$i][$j]=$line[$j];
          }
  }