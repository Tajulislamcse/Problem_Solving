<?php
$str=trim(fgets(STDIN));
$len=strlen($str);
$rest="";
for($i=1;$i<$len;$i++)
	$rest.=$str[$i];
//$j=json_encode($rest);
echo strtoupper($str[0]).$rest;