<?php
$str=trim(fgets(STDIN));
$hello="hello";

for($i=0;$i<strlen($str);$i++)
{
	if($str[$i]=='h')
	{
      $key=$i;
      break;
	}
}

for($i=0;$i<strlen($hello);$i++)
{
	for($j=$key;$j<strlen($str);$j++)
	{
		if($hello[$i]==$str[$j])
		{
			$count[$i]=$j;
			break;
		}

	}
}
/*
$cnt=0;
for($i=0;$i<count($count)-1;$i++)
{
 if($count[$i]>$count[$i+1]){
 	echo "NO";
 	break;
 }
  $cnt++;

}
if($cnt==4)
	echo "YES";
	
*/
	print_r($count);