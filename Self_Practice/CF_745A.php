<?php
$str=trim(fgets(STDIN));
$split=str_split($str);
$count=count(array_unique($split));
if($count==1)
{
	echo "$count";
}
else
{
 $count=1;
 for ($i=0; $i <count($split) ; $i++)
  { 
 		# code...
    $rmvLst=array_pop($split);
	array_unshift($split, $rmvLst);
	$str1=implode('',$split);
	if($str1==$str)
	 {
		echo "$count";
		break;
	 }
	 $count++;	

  }

}
