<?php
$str=trim(fgets(STDIN));
for($i=0;$i<strlen($str);$i++)
{
   if($str[$i]==1)

   {
   	$j=$i;
   	break;
   }
}
//echo "$j";

$str2="";
for($k=$j;$k<strlen($str);$k++)
	$str2.=$str[$k];
//echo "$str2\n";
$strrev=strrev($str2);
//echo "$strrev\n";
for($i=0;$i<strlen($strrev);$i++)
{
   if($strrev[$i]==1)

   {
   	$l=$i;
   	break;
   }
}
for($i=$l;$i<strlen($strrev);$i++)
	echo "$strrev[$i]";

/*
for($k=strlen($str)-$j;$k>=$j;$k--)
{
	if($str[$k]==1)
	{
		$l=$k;
		break;
	}
}
$str2="";
for($m=$j;$m<strlen($str)-($j+$l);$m++)
	$str2.=$str[$m];
echo "$str2";
*/