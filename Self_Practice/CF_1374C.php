<?php
$tc=readline();
while($tc--)
{
  fscanf(STDIN,"%d",$len);
  $str=trim(fgets(STDIN));
  $sum=0;
  for ($i=0; $i <$len ; $i++)
   { 
	  	  if($str[$i]=='(')
	  	  	$sum++;
	  	  elseif ($sum>0&&$str[$i]==')') 
	  	  $sum--;
	  	  

   }
   echo "$sum\n";
}