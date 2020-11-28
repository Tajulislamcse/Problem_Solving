<?php
fscanf(STDIN,"%f %f",$n,$k);
$mid=ceil($n/2);
echo $k<=$mid?2*$k-1:2*($k-$mid);