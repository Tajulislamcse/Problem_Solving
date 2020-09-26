<?php
fscanf(STDIN,"%d %d",$n,$m);
for($i=1;$i<=$n;$i++)
{
	if($i%2==0)
	{
		if($i%4!=0)
		{
		for($j=1;$j<=$m-1;$j++)
			echo ".";
		echo "#\n";
         }
         else
         {
         	echo "#";
         for($j=2;$j<=$m;$j++)
             	echo ".";
             echo "\n";

         }
	}
	else
	{
		for($j=1;$j<=$m;$j++)
			echo "#";
			echo "\n";

	}


}