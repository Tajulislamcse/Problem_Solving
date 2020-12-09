<?php
$line=explode(' ',trim(fgets(STDIN)));
$color=array();
for ($i=0; $i <4 ; $i++)
 { 
	$color[$line[$i]]=1;
}
echo 4-count($color);
