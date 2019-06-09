<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
  $count=0;
  //$text1="Yes";
  //$text2="No";
  fscanf(STDIN, "%d\n", $testcases);
//$number=array();
for($t=1;$t<=$testcases;$t++)
{
fscanf(STDIN, "%d\n", $number);

for($i=2;$i<=$number/2;$i++)
{
    if(($number%$i)==0)
    {
        $count++;
        //echo "No\n";
         break;
    }
//$bool=true;
}
if($count==0 && $number>1)  <?php echo"Analysis: 0 abong 1 ke bad dici $number>1 bole diye karon
                            0 abong 1 prime number noi. 0 ar 1 er jonno ami yes print korte chayna
                            just agulo k else pathay dici. else er modde $count=0 bole dici karon even
                            number hole count er man bere jabe.jar fole $count==0 akhane dukbena
                            orthat no print korbe.$count=0 deyate jemon $number=8 dile else giye $count er
                            man ta 0 theke change hbena.
echo"Yes\n";
else{
echo "No\n";
$count=0;  
}

}