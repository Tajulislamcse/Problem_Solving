<?php
fscanf(STDIN,"%d",$n);
for($i=0;$i<$n;$i++)
{
	fscanf(STDIN,"%d %d",$h[$i],$a[$i]);

}
$count=0;
for($i=0;$i<$n;$i++)
{
	for($j=0;$j<$n;$j++)
	{
	if($h[$i]==$a[$j])
		$count++;
    }
}
echo "$count\n";