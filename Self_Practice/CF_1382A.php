<?php
fscanf(STDIN,"%d",$t);
while ($t--)
{
	fscanf(STDIN,"%d %d",$n,$m);
	$array1=explode(' ',trim(fgets(STDIN)));
	$array2=explode(' ',trim(fgets(STDIN)));
	if($m>$n)
	{
		$tmp=$array2;
		$array2=$array1;
		$array1=$tmp;
	}
	$flag=0;
    for ($i=0; $i <count($array2); $i++)
    { 

    	for ($j=0; $j <count($array1) ; $j++)
    	{ 
    		if($array2[$i]==$array1[$j])
    		{
    			$flag=1;
    			echo "YES\n1 $array2[$i]\n";
    			break;
    		}
    	}
    	if($flag==1)
    		break;
    }
    if($flag==0)
    	echo "NO\n";
    



}