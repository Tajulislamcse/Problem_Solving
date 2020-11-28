<?php
$tc=readline();
while($tc--)
{
	fscanf(STDIN,"%d %d %d %d",$n,$c0,$c1,$h);
    $str=trim(fgets(STDIN));
    if($c0==$c1)
    	echo $n*$c1."\n";
    elseif($c0<$h&&$c1<$h)
    {
    	$str1=CountZeroAndOne($str);
    	echo $str1[0]*$c0+$str1[1]*$c1."\n";
    	
    }
    else
    {
    	$ara=array();
    	$str1=CountZeroAndOne($str);
       //$ara[0]=$str1[0]*$h+$str1[0]*$c1;
       $ara[1]=$str1[1]*$h+$n*$c0;
       $ara[2]=$str1[0]*$h+$n*$c1;
       echo min($ara)."\n";

    }


}
function CountZeroAndOne($str)
{
	    $zero=0;
    	$one=0;
    	for ($i=0; $i <strlen($str) ; $i++) 
    	{ 
    		if($str[$i]==0)
    			$zero++;
    		else
    			$one++;
    	}
    	return $zero.$one;
}