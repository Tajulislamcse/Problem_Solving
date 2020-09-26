<?php
fscanf(STDIN,"%s",$t);
fscanf(STDIN,"%s %s %s %s %s",$h1,$h2,$h3,$h4,$h5);
$count=0;
if($t[0]==$h1[0]||$t[0]==$h2[0]||$t[0]==$h3[0]||$t[0]==$h4[0]||$t[0]==$h5[0]||$t[1]==$h1[1]||$t[1]==$h2[1]||$t[1]==$h3[1]||$t[1]==$h4[1]||$t[1]==$h5[1])
{
	echo "YES";
	$count=1;
}
if($count==0)
echo "NO";