<?php
fscanf(STDIN,"%d %d %d",$n,$p,$q);
fscanf(STDIN,"%s",$str);
$ans=false;
for ($i=0; $i <=$n ; $i++) 
 { 
	for ($j=0; $j <=$n ; $j++)
	 { 
		if($p*$i+$q*$j==$n)
		{
           $ans=true;
           break;
		}
	 }
  if($ans)
  	break;
 }
if($ans)
{
	       echo $i+$j."\n";
             $start=0;
			while($i--)
			{
				echo substr($str,$start,$p)."\n";
				$start+=$p;

			}
			while($j--)
			{
				echo substr($str,$start,$q)."\n";
				$start+=$q;

			}
		
	
}
else
  echo "-1";
  