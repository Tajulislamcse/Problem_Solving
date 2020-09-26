<?php
fscanf(STDIN,"%d %d %d",$participate,$pens,$notebook);
if($pens>=$participate&&$notebook>=$participate)
	echo "Yes";
else
	echo "No";