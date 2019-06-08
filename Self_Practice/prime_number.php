<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
  $count=0;
  $text1="No";
  $text2="Yes";
  fscanf(STDIN, "%d\n", $testcases);
//$number=array();
for($t=1;$t<=$testcases;$t++)
{
fscanf(STDIN, "%d\n", $number);
for($i=2;$i<$number/2;$i++)
{
    if(($number%$i)==0)
    {
        $count++;
         break;
    }
//$bool=true;
}
if($number>1 && $count==0)
fprintf(STDOUT,"%s\n",$text2);
else {
  
 fprintf(STDOUT,"%s\n",$text1);

}
 
}