<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
  //$count=0;
  //$text1="No";
  //$text2="Yes";
  fscanf(STDIN, "%d\n", $testcases);
//$number=array();
for($t=1;$t<=$testcases;$t++)
{
fscanf(STDIN, "%d\n", $number);
//$result=0;
 //if(sqrt($number)==(int)($result))
 $result=sqrt($number);
 echo "$result\n";
 if(floor($result)==$result)
 echo "yes\n";
 else
 echo "no\n";
}