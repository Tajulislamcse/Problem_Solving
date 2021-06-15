<?php
$arr=explode(' ',trim(fgets(STDIN)));
echo"please give target value:";
$target=readline();
$first=0;
$last=count($arr)-1;
$flag=0;
while($first<=$last)
{
	$mid=(int)($first+$last)/2;
	if($arr[$mid]==$target)
	{   $flag=1;
		$pos=$mid+1;
		break;
	}
	elseif($arr[$mid]<$target)
	{
		$first=$mid+1;
	}
	else
		$last=$mid-1;

}
if($flag==1)
  echo $pos;
else
	echo"Not found";