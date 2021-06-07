<?php
fscanf(STDIN,"%d\n",$tc);
while($tc--){
fscanf(STDIN,"%s\n",$str);
$sum=0;
for($i=0;$i<strlen($str);$i++)
  $sum=$sum+ord($str[$i]);
  
  if($sum%20==0)
  echo"Yes\n";
  else echo"No\n";

  
}