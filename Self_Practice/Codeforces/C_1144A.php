<?php
fscanf(STDIN,"%d",$tc);
while ($tc--)
{

	
	$str=trim(fgets(STDIN));
	$asciValue=array();
	for ($i=0; $i <strlen($str) ; $i++)
	{ 
		$asciValue[$i]=ord($str[$i]);
	}
   // print_r($asciiValue);//print_r($str);
	for ($i=0; $i <count($asciValue) ; $i++)
	{ 
			for ($j=0; $j <count($asciValue)-1 ; $j++)
			 {
                 if($asciValue[$i]<$asciValue[$j])
                 {
                 	$asciValue[$i]=$asciValue[$i]+$asciValue[$j];
                 	$asciValue[$j]=$asciValue[$i]-$asciValue[$j];
                 	$asciValue[$i]=$asciValue[$i]-$asciValue[$j];
                 }			  
			 }
	}
	$flag=0;
	for ($i=0; $i <count($asciValue)-1 ; $i++)
	{ 
		if($asciValue[$i+1]-$asciValue[$i]!=1)
		{
          echo "No\n";
          $flag=1;
          break;
		}
	}
    if($flag==0)
    	echo "Yes\n";

	
}