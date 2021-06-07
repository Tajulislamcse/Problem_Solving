<?php
fscanf(STDIN,"%d\n",$testcases);
while($testcases--)
{
  fscanf(STDIN,"%s\n",$str);
  if(strlen($str)==11)
   {
       $m=strrev($str)."88";
   
       $str=strrev($m);
   } 
      // line 5 and line 14 jodi ekai variable use kori tahole amk dcp-194.php er moto
      //str length 13 nd str length 11 er jonno alada code likhte hoitecena othat 
      // str length 11 hole if condition e dukbe onnothay str length 13 hole str length 13 dore
      // kaj kore felbe.
      //sarmormo hocche duti variable ek hole goto statement er kajta kore feletece.

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
