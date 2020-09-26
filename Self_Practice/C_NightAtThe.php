<?php
fscanf(STDIN,"%s",$str);
$str='a'.$str;
$alphabet="abcdefghijklmnopqrstuvwxyz";
$revAlphabet=strrev($alphabet);

for($i=0;$i<strlen($str);$i++)
{
	if($str[$i]>'n')
	{
		for($j=0;$j<strlen($revAlphabet);$j++)
		{   
			if($str[$i]==$revAlphabet[$j])
			{
				echo "reverse loop\n";
				$index[$i]=$j+1;
				break;

			}
		}
	}
	else {
			
           
       for($j=0;$j<strlen($alphabet);$j++)
		{
			if($str[$i]==$alphabet[$j])
			{
				echo "soja loop\n";
				$index[$i]=$j;
				break;

			}
		}


		}	
		
}
print_r($index);

for($i=0;$i<count($index)-1;$i++)
{
$count[$i]=$index[$i]+$index[$i+1];
}
print_r($count);