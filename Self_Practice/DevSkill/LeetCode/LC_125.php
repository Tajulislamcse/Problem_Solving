<?php
$line=trim(fgets(STDIN));
$pattern="/[^0-9a-z]+/i";
$r=preg_replace($pattern,'',strtolower($line));
if($r==strrev($r))
	echo "yes";
else
	echo "false";