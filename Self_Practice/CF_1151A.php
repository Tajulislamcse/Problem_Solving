<?php
fscanf(STDIN,"%d",$n);
fscanf(STDIN,"%s",$str);
$alpha="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$split=str_split($alpha);
for ($i=0; $i <strlen($str)-3 ; $i++)
{ 
	$str1=substr($str,$i,4);
    $frst=implode(array_keys($split,$str1[0]));
    $secnd=implode(array_keys($split,$str1[1]));
    $thrd=implode(array_keys($split,$str1[2]));
    $frth=implode(array_keys($split,$str1[3]));


		if($frst>13)
		
			$g1=abs($frst-26);
			//echo "$g1\n";
		
		else
			$g1=$frst;

		if($secnd>15)
			$g2=abs($secnd-28);
		else
		
			$g2=abs($secnd-2);
			//echo "$g2\n";
		

		if($thrd<6)
			$g3=abs($thrd+7);
		else
			$g3=abs(19-$thrd);

		if($frth>19)
			$g4=abs(32-$frth);
		else
			$g4=abs($frth-6);
		$count[$i]=$g1+$g2+$g3+$g4;
     
			


	
	
}
$min=$count[0];
for ($i=0; $i <count($count); $i++)
{ 
	if($count[$i]<$min)
	{
		$min=$count[$i];
	}
}
echo "$min";

