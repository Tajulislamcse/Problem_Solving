<?php
$s=trim(fgets(STDIN));
echo count(explode(' ',preg_replace("/( )+/"," ",$s)));