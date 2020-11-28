<?php
fscanf(STDIN,"%d %d",$strSize,$k);
fscanf(STDIN,"%s",$str);
$alpha='abcdefghijklmnopqrstuvwxyz';
$ans=array();
//$ans[]=0;
$max=0;
for ($i=0; $i <26 ; $i++)
{  $cnt=0;
    $ans[$i]=0;
    for ($j=0; $j <$strSize ; $j++) 
    { 
        if($str[$j]==$alpha[$i])
         {
            $cnt++;
            if($cnt==$k)
             {
                $ans[$i]++;
                $cnt=0;
             }  
         }
         else
            $cnt=0;
    }
    if($ans[$i]>$max)
        $max=$ans[$i];
  
}
echo $max;
//print_r($ans);