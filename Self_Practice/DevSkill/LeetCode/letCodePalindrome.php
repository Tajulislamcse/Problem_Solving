<?php
fscanf(STDIN,"%d",$num);
$str=$num;


	$str1='';
	while($num>0)
	{
		$lst=$num%10;
		$str1.=$lst;
		$num=(int)($num/10);

	}
	
	echo "$str1";

?>