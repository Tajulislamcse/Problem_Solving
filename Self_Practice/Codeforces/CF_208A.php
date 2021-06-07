<?php
fscanf(STDIN,"%s",$str);
$i=0;
while($i<strlen($str))
 { 
	if($str[$i]=='W'&&$str[$i+1]=='U'&&$str[$i+2]=='B')
	{
		$i+=3;
		echo " ";
	}
	else
	{
		echo $str[$i];
		$i++;
	}
}
 //echo "$str1"; 