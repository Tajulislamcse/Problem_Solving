<?php
fscanf(STDIN,"%d %d %d",$n,$k,$q);
$line=explode(" ",trim(fgets(STDIN)));
for ($i=0; $i <$q ; $i++)
{ 
	fscanf(STDIN,"%d",$m);
	echo $line[($n-($k%$n)+$m)%$n]."\n";

}

