<?php

$up="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$lo="abcdefghijklmnopqrstuvwxyz";
$str=trim(fgets(STDIN));
  $cnt1=0;
  $cnt2=0;                                                                                                                                                                  	
for($i=0;$i<strlen($str);$i++)
{
  for($j=0;$j<26;$j++)
  {
  	if($str[$i]==$up[$j])
  		$cnt1++;
  	if($str[$i]==$lo[$j])
  		$cnt2++;
  }
}

if($cnt2>=$cnt1)
	echo strtolower($str);
else
   echo	strtoupper($str);