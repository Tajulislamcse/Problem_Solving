<?php
fscanf(STDIN,"%s",$p);
$flag=0;
for ($i=0,$j=0; $i <strlen($p) ; $i++)
 { 
	if($p[$i]=='H'||$p[$i]=='Q'||$p[$i]=='9')
	{
		echo "YES\n";
		$flag=1;
		break;
	}
}
if($flag==0)
echo "NO\n";
