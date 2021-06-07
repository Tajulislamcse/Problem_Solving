<?php
fscanf(STDIN,"%d",$year);
if(($year%4==0&&$year%100!=0)||($year%400==0))
	echo "Leap year";
else
	echo "Common Year";