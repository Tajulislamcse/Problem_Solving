<?php
fscanf(STDIN,"%s",$str);
$count=0;
$others=0;
for($i=0;$i<strlen($str);$i++)
{
	if($str[$i]=='a')
		$count++;
	else $others++;


}
if($count>$others)
		echo strlen($str);
	else
		echo ($count*2)-1;