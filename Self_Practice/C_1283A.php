<?php
fscanf(STDIN,"%d",$tc);
while ($tc--) {
	fscanf(STDIN,"%d %d",$h,$m);
	$ans=(23-$h)*60+(60-$m);
	echo "$ans\n";

}