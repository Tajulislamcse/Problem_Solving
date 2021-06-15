<?php
$s=readline();
$result=0;
for($i=0;$i<strlen($s);)
{
	//$left=0;
  if($i<strlen($s)-1)
  $right=romanEquvalentNumber($s[$i+1]);
  echo "char=$s[$i]\n";
  $left=romanEquvalentNumber($s[$i]);
  //echo "left=$left\nright=$right\n";
  if($right>$left)
  {
  	$sum=$right-$left;
  	$i+=2;
  	$right=0;
  }
  else
  {
  $sum=$left;
  $i++;

  }
  $result+=$sum;
  
}
echo $result;
 

function romanEquvalentNumber($char)
{
	if($char=='I')
		return '1';
	elseif($char=='V')
		return '5';
	elseif($char=='X')
		return '10';
	elseif($char=='L')
		return '50';
	elseif($char=='C')
		return '100';
	elseif($char=='D')
		return '500';
	else
		return '1000';

}
foreach()