<?php
echo "how much number do you want to enter:";
fscanf(STDIN,"%d",$n);
for ($i=0; $i <$n ; $i++)
 { 
   fscanf(STDIN,"%d",$arr[$i]);
}
/*
echo "Entered numbers are:\n";

for ($i=0; $i <$n ; $i++)
 { 
   fprintf(STDOUT,"%d\n",$arr[$i]);
}
*/
$loc=0;
$max=$arr[0];
for ($i=0; $i <$n ; $i++) 
{ 
		if($arr[$i]>$max)
		{
			$max=$arr[$i];
			$loc=$i+1;
		}

}
echo "Max=$max Loc=$loc";