<?php
fscanf(STDIN,"%d",$n);
fscanf(STDIN,"%s",$str);
$alphabet="abcdefghijklmnopqrstuvwxyz";
$unique="";
$lowercase=strtolower($str);
for($i=0;$i<strlen($alphabet);$i++)
{
	for($j=0;$j<strlen($lowercase);$j++)
	{
		if($alphabet[$i]==$lowercase[$j])
		{
			$unique.=$lowercase[$j];
			break;
		}
	}
}
if($alphabet==$unique)
	echo "YES";
else echo "NO";
