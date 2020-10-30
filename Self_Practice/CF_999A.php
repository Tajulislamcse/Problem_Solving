<?php
fscanf(STDIN,"%d %d",$arrSize,$k);
$arr=explode(' ',trim(fgets(STDIN)));
$pos=array();
$flag=0;
for ($i=0,$j=0; $i <$arrSize; $i++)
{ 
	if($arr[$i]>$k)
	{
		$pos[$j++]=$i;
        $flag=1;
	
	}
}
//print_r($pos);
if($flag==1)
  echo $arrSize-1-abs($pos[count($pos)-1]-$pos[0]);
else
  echo $arrSize;


