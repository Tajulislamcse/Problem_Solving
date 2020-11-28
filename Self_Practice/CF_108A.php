<?php
fscanf(STDIN,"%s",$str);
$time=explode(':',$str);
if($time[0]==23&&$time[1]>32)
   echo "00:00\n";
else
{

$palindromicTime=array();
$palindromicTime=[
                  
                  '00:00',
                  '01:10',
                  '02:20',
                  '03:30',
                  '04:40',
                  '05:50',
                  '10:01',
                  '11:11',
                  '12:21',
                  '13:31',
                  '14:41',
                  '15:51',
                  '20:02',
                  '21:12',
                  '22:22',
                  '23:32',

];
$flag=0;
for ($i=0; $i <count($palindromicTime) ; $i++)
 { 
	if($str==$palindromicTime[$i])
	{
		echo $palindromicTime[$i+1];
		$flag=1;
		break;
	}
 }
 if($flag==0)
 {
 	$min=1000000000000000000;
   $time=explode(':',$str);
   $minute1=$time[0]*60+$time[1];
   for ($i=0; $i <count($palindromicTime) ; $i++) 
   { 
   	
   	   $palindExplode=explode(':',$palindromicTime[$i]);
   	   $minute2=$palindExplode[0]*60+$palindExplode[1];
   	   if($minute2>=$minute1)
   	   {
	   	   $diff=abs($minute2-$minute1);
	   	   if($diff<$min)
	   	   {
	   	   	$min=$diff;
	   	   	$ans=$palindromicTime[$i];
	   	   }
	   	}   

   }
   echo "$ans\n";

 }
}