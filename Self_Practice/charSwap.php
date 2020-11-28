<?php
echo "char1:";
$a=readline();
echo "char2:";
$b=readline();
$a=ord($a)+ord($b);
$b=$a-ord($b);
$a=$a-$b;
echo "char1:".chr($a)."\n";
echo "char2:".chr($b);
