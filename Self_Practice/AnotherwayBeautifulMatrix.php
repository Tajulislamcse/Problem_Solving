<?php
$x=0;
for($i=0;$i<5;$i++)
{
	for($j=0;$j<5;$j++)
	{ 
		fscanf(STDIN,"%d",$x);
      if($x==1)
      {
      	echo abs($i-2)+abs($j-2);

      }
	}
}
