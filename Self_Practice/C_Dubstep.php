<?php
fscanf(STDIN,"%s",$str);
$str1=explode("WUB", $str);
$wspace=implode(" ", $str1);
echo trim($wspace);
