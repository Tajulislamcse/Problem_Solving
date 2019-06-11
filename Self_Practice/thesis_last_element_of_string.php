<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
$str=fgets(STDIN);
$rmv=explode(" ",$str);
$array=preg_replace('/\s+/','',$rmv);

var_dump($array);