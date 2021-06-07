<?php
$tc=readline();
while ($tc--)
 {
	  fscanf(STDIN,"%d %d",$a,$b);
	  echo (int)((abs($a-$b)+9)/10);
	  echo "\n";

 }