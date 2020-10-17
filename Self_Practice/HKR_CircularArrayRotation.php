<?php
fscanf(STDIN,"%d %d %d",$arr,$k,$q);
$line=explode(' ',trim(fgets(STDIN)));
$m=array();
for ($i=0; $i <$q ; $i++)
{ 
	fscanf(STDIN,"%d",$m[$i]);
}
if(count($line)!=$k)
{
	$newArr=array();
	for ($i=0; $i <$k ; $i++) 
	{

			$rmvLst=array_pop($line);
			array_unshift($line,$rmvLst);
			$newArr[]=$line;
	}
	for ($i=0; $i <$q ; $i++)
	{ 

	   echo $newArr[$k-1][$m[$i]]."\n";	
	}
}
else
 {

	for ($i=0; $i <$q ; $i++)
	{ 

	   echo $line[$m[$i]]."\n";	
	}
  }	


