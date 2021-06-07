<?php
fscanf(STDIN,"%d %d",$row,$col);
for($i=0;$i<$row;$i++)
{
	$line[$i]=explode(" ",trim(fgets(STDIN)));
	
	
	

}
$flag=0;
for($i=0;$i<$row;$i++)
{
	for($j=0;$j<$col;$j++)
	{
	if($line[$i][$j]=='C'||$line[$i][$j]=='M'||$line[$i][$j]=='Y')
	{
		echo "#Color";
		$flag=1;
		break;
	}
   }
   if($flag==1)
   	break;
   

}
if($flag==0)
echo "#Black&White";
