<?php
fscanf(STDIN,"%d",$n);
$t=0;
$max=0;
for($i=0;$i<$n;$i++)
{
  fscanf(STDIN,"%d %d",$a,$b);
  $t=$t-$a+$b;
  if($t>$max)
  	{ 
  		$max=$t;
  	}


}
echo "$max";