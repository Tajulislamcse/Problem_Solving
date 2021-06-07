<?php
fscanf(STDIN,"%d\n",$testcases);
while($testcases--)
{
   $input=trim(fgets(STDIN));
   $strtoarr=explode(" ",$input);
   //var_dump($strtoarr);
   $ans=sqrt(pow($strtoarr[0],2)+pow($strtoarr[1],2)+pow($strtoarr[2],2));

    echo sprintf('%0.2f',$ans)."\n";

}