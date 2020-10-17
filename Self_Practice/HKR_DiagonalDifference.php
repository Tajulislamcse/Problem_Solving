<?php

fscanf(STDIN,"%d",$n);
$leftDiagon=0;
$rightDiagon=0;
for ($i=0; $i <$n ; $i++) 
{
 $line[$i]=explode(' ',trim(fgets(STDIN)));
    for ($j=0; $j <$n ; $j++)
    {
       if($i==$j)
          $leftDiagon+=$line[$i][$j];
       // $rightDiagon+=$line[$i][$j]
     }

}
//echo "$leftDiagon";
for ($i=$n-1,$j=0; $i>=0,$j<$n ; $i--,$j++)
{
$rightDiagon+=$line[$i][$j];
}
$rslt=abs($leftDiagon-$rightDiagon);
echo $rslt;