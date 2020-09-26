<?php
fscanf(STDIN,"%d",$n);
for($i=0;$i<$n;$i++)
{
	$str[$i]=trim(fgets(STDIN));
}
if($n==1)
{
	$str1[0]=explode(' ', $str[0]);
}
else
	for($i=0;$i<$n;$i++)
	$str1[$i]=explode(' ', $str[$i]);

//print_r($str1);
$sum=0;
for($i=0;$i<3;$i++)
{
		for($j=0;$j<count($str1);$j++)
		{
          $sum+=$str1[$j][$i];

		}
		if($sum==0)
		{
			echo "YES";
			break;
		}

		else{ echo "NO"; 
		break;}

}



