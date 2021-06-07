<?php
fscanf(STDIN,"%d %d",$n,$m);
for($i=0;$i<$m;$i++)
{
	$line[$i]=explode(" ",trim(fgets(STDIN)));
     if(strlen($line[$i][0])<=strlen($line[$i][1]))
     	 $str[$i]=$line[$i][0];
     	else
     		$str[$i]=$line[$i][1];
	

}
//print_r($str);
$text=explode(" ",trim(fgets(STDIN)));
//print_r($text);

for($i=0;$i<$n;$i++)
{
	for($j=0;$j<$m;$j++)
	{

    // echo "text=$text[$i]\n";
	if($text[$i]==$line[$j][0])
	{

         if($i==$n-1)
         	echo "$str[$j]";
         else
         	echo "$str[$j] ";
	}
}
}
