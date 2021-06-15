<?php
$ransomNote=trim(fgets(STDIN));
$magazine=trim(fgets(STDIN));
$split1=str_split($ransomNote);
sort($split1);
$split2=str_split($magazine);
sort($split2);
$flag=0;
for ($i=0,$j=0; $i <count($split2) ; $i++)
{ 
	if($split1[$j]==$split2[$i])
	{
		$j++;
		if($j==count($split1))
		{
			$flag=1;
			echo "true";
			break;
		}
	}
}
if($flag==0)
echo "false";