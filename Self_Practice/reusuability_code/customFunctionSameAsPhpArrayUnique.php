<?php
fscanf(STDIN,"%s",$str);
echo distinctChar($str);
function distinctChar($str)
{
		$k=1;
		$distChar=$str[0];
		for ($i=1; $i <strlen($str) ; $i++)
		 { 
		 	$cnt=0;
			for ($j=0; $j <strlen($distChar); $j++)
			 { 
				if($str[$i]!=$distChar[$j])
				{
					$cnt++;
					if($cnt==strlen($distChar))
					{
	                     $distChar.=$str[$i];
					}
				}
			 }
		 }
  return $distChar;
}
