<?php
fscanf(STDIN, "%d\n", $n); 
$cnt = array();
for (; $n > 0; $n--) {
	fscanf(STDIN, "%s\n", $s); 
	if (!array_key_exists($s, $cnt)) {
		$cnt[$s] = 1;
		print("OK\n");
	} else {
		print($s.$cnt[$s]."\n");
		$cnt[$s] += 1;
	}
}