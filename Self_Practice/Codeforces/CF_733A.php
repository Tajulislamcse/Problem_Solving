<?php
fscanf(STDIN,"%s",$str);
$cnt=1;
$max=1;
for ($i=0; $i <strlen($str) ; $i++)
 { 
	if($str[$i]=='A'||$str[$i]=='E'||$str[$i]=='I'||$str[$i]=='O'||$str[$i]=='U'||$str[$i]=='Y')
	{
		$cnt=1;
	}
	else
		$cnt++;
	if($cnt>$max)
	   $max=$cnt;



 }
 echo "$max";