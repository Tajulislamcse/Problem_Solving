<?php
$str=trim(fgets(STDIN));
print_r(explode(",",str_replace(';',',',$str)));
