<?php
fscanf(STDIN,"%d",$n);
$str=trim(fgets(STDIN));
echo preg_replace('/ogo(go)*/','***',$str);
