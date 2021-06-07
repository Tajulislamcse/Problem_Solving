<?php
fscanf(STDIN,"%d\n",$tc);
while($tc--)
{
	fscanf(STDIN,"%d\n",$len);
	$arr=explode(" ",trim(fgets(STDIN)));

	for ($i=0; $i <$len ; $i++)
	 { 
	 	$cnt=0;
		for ($j=0; $j <$len ; $j++)
		{ 
		  if($arr[$i]==$arr[$j])
		     $cnt++;	
		}
		if($cnt==1)
			echo $i+1;
	 }
	 echo "\n";
}


