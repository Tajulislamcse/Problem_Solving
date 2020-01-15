<?php

fscanf(STDIN,"%d\n",$tc);
while ($tc--)
 {
	$str=trim(fgets(STDIN));
	$strToArr=explode(" ",$str);
	$diameterOfCircle=2*$strToArr[0];
	$format1=number_format((float)$diameterOfCircle, 2, '.', '');
	$otivuzCnsdrAsSomokontrivuz=sqrt(2)*$strToArr[1];/*jodi ami britter ontorlikhito square ke ekti line tene somokoni trivuz kolpona kori tahole d^2=a^2+a^2 =2a^2 so d=sqrt(2)*a .prithagoruser sutraonosare.*/
	$format2=number_format((float)$otivuzCnsdrAsSomokontrivuz, 2, '.', '');
	if(($format1==$format2)||abs($format1-$format2)<=0.1)
		echo "Yes"."\n";
	 else 
	 	echo "No"."\n";

}