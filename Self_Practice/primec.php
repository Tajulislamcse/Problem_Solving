<?php

fscanf(STDIN,"%d",$tc);
//$flag=0;

for($t=1;$t<=$tc;$t++)
{   $flag=0;
    $in=explode(" ",trim(fgets(STDIN)));
    
    for($i=0;$i<sizeof($in);$i++)
    {  //echo $in[$i]."\n";
     $cnt=0;
       
        for($j=2;$j<=($in[$i])/2;$j++)
      {
        if(($in[$i])%$j==0)
        {
          $cnt=1;
          break;
        } 
      }
      if($cnt==0 && $in[$i]>1)// $in[$i]>1 bole 0 and 1 ke bad diyeci
      $flag++; 
      
      }  
echo"Case $t:$flag\n";
      
}