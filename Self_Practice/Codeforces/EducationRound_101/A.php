<?php
fscanf(STDIN,"%d",$tc);
while($tc--)
{   
    fscanf(STDIN,"%s",$str);
	$len=strlen($str);
	if($len%2==1||$str[0]==')'||$str[$len-1]=='(')
		echo "NO\n";
	else
		echo "YES\n";
 }
