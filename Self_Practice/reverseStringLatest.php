<?php
$str=readline();
$i=0;
$j=strlen($str)-1;
while($i<$j)
{
  $tmp=$str[$i];
  $str[$i++]=$str[$j];
  $str[$j--]=$tmp;
	
}
echo "$str";