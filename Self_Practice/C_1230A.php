<?php
$line=explode(" ",trim(fgets(STDIN)));
$s1=$line[0];
$s2=$line[1];
$s3=$line[2];
$s4=$line[3];
$s5=$line[0]+$line[1];
$s6=$line[2]+$line[3];
$s7=$line[1]+$line[2];
$s8=$line[0]+$line[3];
$s9=$line[0]+$line[2];
$s10=$line[1]+$line[3];
$s11=$line[1]+$line[2]+$line[3];
$s12=$line[0]+$line[1]+$line[2];
$s13=$line[0]+$line[1]+$line[3];
$s14=$line[0]+$line[2]+$line[3];


if($s5==$s6||$s7==$s8||$s9==$s10||$s1==$s11||$s2==$s14||$s3==$s13||$s4==$s12)
	echo "YES";
else
	echo "NO";
