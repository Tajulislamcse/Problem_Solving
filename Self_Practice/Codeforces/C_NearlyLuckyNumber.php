<?php
fscanf(STDIN,"%s",$n);
$count=0;
for($i=0;$i<strlen($n);$i++)
{
	if($n[$i]=="7"||$n[$i]=="4")
		$count++;
}
if($count=="7"||$count=="4")
echo "YES";
else echo "NO";