<?php
fscanf(STDIN,"%d",$n);
if($n==1)
echo "I hate it";
else{
$h="I hate ";
$l="I love ";

for($i=1;$i<=$n;$i++)
{
  if($i%2==1)
  	$str[$i]=$h;
  else
  	$str[$i]=$l;
}


$insert=implode('that ',$str);
$result=$insert."it";
echo $result;
}