<?php
fscanf(STDIN,"%d\n",$t);
while($t--)
{
  fscanf(STDIN,"%d\n",$nf);
  
  for($i=0;$i<$nf;$i++)
  list($a[$i],$b[$i])=explode(" ",trim(fgets(STDIN)));

  //var_dump(list($a,$b));
  //echo "$a[0] $b[0]";

  $max=$b[0];
  $min=$b[0];
  for($i=0;$i<$nf;$i++)
  {
    if($b[$i]>=$max)
    {
      $max=$b[$i];
      $first=$a[$i];
    }

    if($b[$i]<=$min)
    {
      $min=$b[$i];
      $last=$a[$i];
    }
  }
    echo "$first $last\n";
  /*
  mainly learnt from this program just joto tomo element ta max toto tomo tai e name ta
  if er modde ami first and last assign kore dilam
  
  sample input:
1
5
Ayan 20
Punom 11
Eifty 9
Prioti 15
Surovi 12

Sample output

Ayan Eifty
  
 */
}    