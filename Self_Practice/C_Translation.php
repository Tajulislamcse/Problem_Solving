<?php
fscanf(STDIN,"%s",$str1);
fscanf(STDIN,"%s",$str2);

if(strrev($str1)==$str2)
	echo "YES";
else
	echo "NO";