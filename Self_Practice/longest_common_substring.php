
<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN,"%s",$string1);

echo $first_string_length=strlen($string1)."\n";

fscanf(STDIN,"%s",$string2);

echo $second_string_length=strlen($string2)."\n"."\n";

if($first_string_length>$second_string_length)
{
    $temp=$first_string_length;

    $first_string_length=$second_string_length;

    $second_string_length=$temp;
}
echo $first_string_length;
echo $second_string_length;

