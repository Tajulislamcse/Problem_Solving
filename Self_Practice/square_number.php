<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
  //$count=0;
  //$text1="NO";
  //$text2="YES";
  fscanf(STDIN, "%d\n", $testcases);
//$number=array();
for($t=1;$t<=$testcases;$t++)
{
fscanf(STDIN, "%d\n", $number);
//$result=0;
 //if(sqrt($number)==(int)($result))
 $result=(int)(sqrt($number+0.0001));
 //echo "$result\n";
 fprintf(STDOUT, "Case %d: ",$t);
 //if((floor($result)-$result)==0)
 if($result*$result==$number)
 echo "YES\n";
 //fprintf(STDOUT, "%s\n",$text2);
 
 else// fprintf(STDOUT, "%s\n",$text1);
 echo"NO\n";

}