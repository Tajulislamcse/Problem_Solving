<?php
fscanf(STDIN,"%d\n",$testcases);
for($t=1;$t<=$testcases;$t++)
{
    $input=trim(fgets(STDIN));
    $m=explode(" ",$input);
    //var_dump($m);
    $max=$m[0];
    $min=$m[0];
    $cnt=0;
    for($i=0;$i<sizeof($m);$i++)
   { $cnt++;
       if($m[$i]>=$max)
       {
           $max=$m[$i];
       }

       if($m[$i]<=$min)
       {
           $min=$m[$i];
       }
      // else $min=$m[$i];
     //  echo $max;
   }
   echo "Case $t: Among $cnt numbers $max is maximum and $min is minimum\n";
}
       
  // echo $max."\n";
  // echo $min."\n"
   /*
$min=999;
   for($i=0;$i<sizeof($m);$i++)
   {
       if($m[$i]<$min)
       {
           $min=$m[$i];
       }
     //  echo $max;
   }
   echo $min."\n";
   */
   

