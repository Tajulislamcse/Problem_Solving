<?php
$num=readline();
$strs=explode(' ',trim(fgets(STDIN)));
$uniqeWord=array();
$first=array_unique(str_split($strs[0]));
sort($first);
$uniqeWord[0]=implode($first);

for ($i=1; $i <$num ; $i++)
 { 
 
	$word=array_unique(str_split($strs[$i]));
	 	sort($word);
         //echo "$uniqeWord[$j] $word\n";
		
			$uniqeWord[$i]=implode($word);
		
	 
 }
echo count(array_unique($uniqeWord));

