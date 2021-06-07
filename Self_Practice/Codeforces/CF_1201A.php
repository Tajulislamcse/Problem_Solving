<?php
fscanf(STDIN,"%d %d",$students,$questions);
for ($i=0; $i <$students ; $i++)
 { 
	$answers[$i]=trim(fgets(STDIN));
 }
$marks=explode(" ",trim(fgets(STDIN)));
$sum=0;
for ($i=0; $i <$questions ; $i++) 
 { 
    $A=0;
    $B=0;
    $C=0;
    $D=0;
    $E=0;

  for ($j=0; $j <$students ; $j++)
    { 
	  if($answers[$j][$i]=='A')
	  	   $A++;
	  elseif($answers[$j][$i]=='B')
	  	   $B++;
	  elseif ($answers[$j][$i]=='C')
	  	    $C++;
	  elseif ($answers[$j][$i]=='D')
	  	    $D++;
	  else
	  	    $E++;
	
	}
	$sum+=$marks[$i]*max($A,$B,$C,$D,$E);
	
}
echo "$sum\n";