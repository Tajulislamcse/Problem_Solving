<?php
$str1=trim(fgets(STDIN));
$str2=trim(fgets(STDIN));
if($str1>$str2)
echo ">";
elseif($str1<$str2)
echo "<";
else
echo "=";
