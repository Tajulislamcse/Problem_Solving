<?php
fscanf(STDIN,"%d",$tc);
while ($tc--)
{   
	$a=array();
	fscanf(STDIN,"%d %d %d %d",$a[0],$a[1],$a[2],$a[3]);
	sort($a);
	echo min($a[0],$a[1])*min($a[2],$a[3])."\n";
}