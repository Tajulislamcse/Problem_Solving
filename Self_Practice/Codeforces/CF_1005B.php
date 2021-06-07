<?php
$str1=trim(fgets(STDIN));
$str2=trim(fgets(STDIN));
for ($i=strlen($str1)-1,$j=strlen($str2)-1; $i>=0&&$j>=0&&$str1[$i]==$str2[$j] ; $i--,$j--);
{ 
	echo $i+$j+2;
}