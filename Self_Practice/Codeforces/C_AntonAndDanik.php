<?php
fscanf(STDIN,"%d",$n);
fscanf(STDIN, "%s",$s);
$com="AD";

for($i=0;$i<strlen($com);$i++)
{  $count=0;
	for($j=0;$j<strlen($s);$j++)
	{
      if($com[$i]==$s[$j])
      {
      	$count++;
      }
	}
	$store[$i]=$count;
}
if($store[0]>$store[1])
	echo "Anton";
else if($store[0]<$store[1])
	echo "Danik";
else echo "Friendship";