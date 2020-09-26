<?php
fscanf(STDIN,"%s",$str1);
fscanf(STDIN,"%s",$str2);
$str3="";
for($i=0;$i<strlen($str1);$i++)
{
	
		if($str1[$i]==$str2[$i])
		{
			$str3.=0;
			
		}
		
		else	$str3.=1;

	}
echo $str3;