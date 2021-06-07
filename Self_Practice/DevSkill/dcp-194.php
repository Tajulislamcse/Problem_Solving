<?php
fscanf(STDIN,"%d\n",$testcases);
while($testcases--)
{
  fscanf(STDIN,"%s\n",$str);
  if(strlen($str)==11)
   {
       $m=strrev($str)."88";
       //for easy way see dcp-194another.php 
   
        $t=strrev($m);
   
   
       if($t[4]=="6")
        echo $t." Airtel"."\n";
     else if($t[4]=="7")
     echo $t." Grameenphone"."\n";
     else if($t[4]=="1")
     echo $t." Citycell"."\n";
     else if($t[4]=="5")
     echo $t." Teletalk"."\n";
     else if($t[4]=="8")
     echo $t." Robi"."\n";
    // else if($t[4]=="9")
    else
     echo $t." Banglalink"."\n";
   }
   
   else if(strlen($str)==13)
   {
    if($str[4]=="6")
    echo $str." Airtel"."\n";
 else if($str[4]=="7")
 echo $str." Grameenphone"."\n";
 else if($str[4]=="1")
 echo $str." Citycell"."\n";
 else if($str[4]=="5")
 echo $str." Teletalk"."\n";
 else if($str[4]=="8")
 echo $str." Robi"."\n";
// else if($t[4]=="9")
else
 echo $str." Banglalink"."\n";
   }
}

//$eight="88";
  //for($i=0;$i<=1;$i++)
  /*
     if($n[0]=="8" && $n[1]=="8" && $n[4]=="7")
     echo $n ." Grameenphone"."\n";

    else if($n[0]=="8" && $n[1]=="8" && $n[4]=="6")
     echo $n ." Airtel"."\n";

     else if($n[0]=="8" && $n[1]=="8" && $n[4]=="5")
     echo $n ."Telitalk"."\n";

     else if($n[0]=="8" && $n[1]=="8" && $n[4]=="1")
     echo $n ." Citycell"."\n";
     //else echo "No";*/

