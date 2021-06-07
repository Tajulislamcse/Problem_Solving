<?php
fscanf(STDIN,"%d",$n);
for($i=0;$i<$n;$i++)
{
	fscanf(STDIN,"%d",$num[$i]);
}
$count=0;
for($i=0;$i<$n-1;$i++)
{
	if($num[$i]!=$num[$i+1])
	{
      $count++;
	}
}
echo $count+1;