<?php
fscanf(STDIN,"%d",$n);
$line=explode(' ',trim(fgets(STDIN)));
$max=0;
for ($i=0; $i <$n ; $i++)
{ 
	if($line[$i]>$max)
		$max=$line[$i];
}
$cnt=0;
for ($i=0; $i <$n ; $i++)
{ 
   if($line[$i]==$max)
   	$cnt++;
}
echo "$cnt";