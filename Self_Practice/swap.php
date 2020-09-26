<?php
echo "Enter the value of a:";
fscanf(STDIN,"%d",$a);
echo "Enter the value of b:";
fscanf(STDIN,"%d",$b);
$tmp=$a;
$a=$b;
$b=$tmp;
echo "a=$a\nb=$b";