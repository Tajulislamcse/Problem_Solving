<?php
fscanf(STDIN,"%d\n",$tc);
while($tc--)
{
	$n=trim(fgets(STDIN));
	if(bcmod($n,2)==1)
		echo "YES\n";
    else
    {
	if(bcmod($n,3)==0||bcmod($n,5)==0||bcmod($n,7)==0||bcmod($n,9)==0)
		echo "YES\n";
	else
		echo "NO\n";
}
}