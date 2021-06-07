<?php
fscanf(STDIN,"%d %d",$arrSize,$k);
$arr=explode(' ',trim(fgets(STDIN)));
$trgtArr[0]=$arr[0];
$l=1;
$m=1;
$key[0]=1;
for ($i=1; $i <$arrSize ; $i++) 
{ 
	$count=0;
     for ($j=0; $j <count($trgtArr); $j++)
     { 
     	if($trgtArr[$j]!=$arr[$i])
     	{
     		$count++;
     		if($count==count($trgtArr))
     		{
     			$trgtArr[$l++]=$arr[$i];
     			$key[$m++]=$i+1;
     		}
     	}
     }
}
if(count($key)>=$k)
  {
	echo "YES\n";
	for ($i=0; $i <count($key) ; $i++)
	 { 
		if($i==$k-1)
		{
			echo "$key[$i]";
			break;
		}
		else
			echo "$key[$i] ";
	}
  }	
	else
		echo "NO\n";

