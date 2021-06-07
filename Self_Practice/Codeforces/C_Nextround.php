<?php
fscanf(STDIN,"%d %d",$n,$k);
//echo "$n $k";
$line[0]=trim(fgets(STDIN));
 $single_value=explode(' ', $line[0]);
// print_r($single_value);
/*
for($i=0;$i<$n;$i++)
{
	fprintf(STDOUT,"str[$i]=%d\n",$single_value[$i]);
}
*/
$count=0;
if($single_value[$k-1]!=0)
{
	for($i=$k;$i<$n;$i++)
	{
		if($single_value[$i]==$single_value[$k-1])
		$count++;
	}
	$res=$count+$k;
	echo "$res";

}
else {
	for($i=$k-1;$i>=0;$i--)
	{
		if($single_value[$i]==0)
		$count++;
	}
	//echo "count=$count\n";
	$res=$k-$count;
	echo "$res";

}


