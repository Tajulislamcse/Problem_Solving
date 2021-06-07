<?php
fscanf(STDIN,"%d %d",$len,$k);
$str=trim(fgets(STDIN));
$alp="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$str1="";
for ($i=0; $i <strlen($alp) ; $i++)
{ 
	for ($j=0; $j <$len; $j++)
	{ 
		if($alp[$i]==$str[$j])
		{
			$str1.=$alp[$i];
			break;
		}

	}
}
$len1=strlen($str1);
if($len1!=$k)
  	echo "0";
else
 {
		for ($i=0; $i <strlen($str1) ; $i++)
	    { 
		   $count=0;

			for ($j=0; $j <$len; $j++)
			{ 
				if($str1[$i]==$str[$j])
				{
					
					$count++;
				}

			}
			$occurrence[$i]=$count;
	    }
	    $min=$occurrence[0];
	    for ($i=0; $i <count($occurrence) ; $i++)
	    { 
	    	if($occurrence[$i]<$min)
	    		$min=$occurrence[$i];
	    }
	    echo $min*$len1;
 }