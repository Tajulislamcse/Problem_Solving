<?php
$str=trim(fgets(STDIN));
if($str%2==0)
{
	echo bcdiv($str,2);
}
else
    echo ceil(bcdiv($str,2,2))*(-1);