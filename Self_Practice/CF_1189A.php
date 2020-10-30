<?php
fscanf(STDIN,"%d",$strlength);
$str=trim(fgets(STDIN));
$cntOne=0;
$cntZero=0;
for ($i=0; $i <$strlength ; $i++)
 { 
	  if($str[$i]=='1')
	  	  $cntOne++;
	  else
	  	  $cntZero++;
 }

 if($cntOne!=$cntZero)
    echo "1\n$str\n";
  else
    echo "2\n$str[0] ".substr($str,1,$strlength-1)."\n";  