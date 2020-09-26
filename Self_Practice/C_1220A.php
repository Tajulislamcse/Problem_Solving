<?php
fscanf(STDIN,"%d",$len);
fscanf(STDIN,"%s",$str);
$z='';
$n='';
for($i=0;$i<$len;$i++)
{
	if($str[$i]=='z')
       $z.=' 0';
     //$z++;
    if($str[$i]=='n')
    	$n.=' 1';
    	//$n++;
}
echo ltrim($n.$z,' ');
