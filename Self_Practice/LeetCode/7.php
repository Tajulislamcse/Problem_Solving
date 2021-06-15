<?php
fscanf(STDIN,"%s",$x);
$flag=0;
if($x<0)
 {
 	$flag=1;
 	$x=trim($x,'-');
 }
//echo $x;
$result="";
while($x>0)
{
	$last=bcmod($x,10);
	$x=bcdiv($x,10);
	$result.=$last;

}
if($result>2147483647 || $result<-2147483648)
	echo 0;
  
elseif($flag==1)
	echo '-'.$result;
else
	echo $result;