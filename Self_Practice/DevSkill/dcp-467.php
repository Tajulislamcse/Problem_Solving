<?php
fscanf(STDIN,"%d\n",$tc);
while($tc--){
fscanf(STDIN,"%s",$str);
$cnt=0;
for($i=0;$i<strlen($str);$i++)
 {
     if($str[$i]=="+")
      $cnt++;
 }
 if($cnt==0)
  echo "Happy New Year-2018"."\n";
  else echo "Happy New Year-".(2018+$cnt)."\n";

}