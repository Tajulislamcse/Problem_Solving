<?php
$evenSum=0;
$oddProduct=1;
while(true)
{
    fscanf(STDIN,"%d",$num);
	if($num==0)
		break;
	if($num%2==0)
	  	$evenSum+=$num;
	  else
	  	$oddProduct*=$num;


}
echo "evenSum=$evenSum\noddProduct=$oddProduct\n";

