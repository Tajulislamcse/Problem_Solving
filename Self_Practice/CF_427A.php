<?php
$n=readline();
$ara=explode(' ',trim(fgets(STDIN)));
$untreated=0;
$freedPolice=0;
for ($i=0; $i <$n ; $i++)
 { 
		if($ara[$i]==-1&&$freedPolice==0)
		{
			$untreated++;
		}
		elseif($ara[$i]>0)
		{
			$freedPolice+=$ara[$i];
		}
		else
			$freedPolice--;

 }
 echo "$untreated";