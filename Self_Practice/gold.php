<?php
fscanf(STDIN,"%d",$t);
for($count=1;$count<=$t;$count++) {
	fscanf(STDIN,"%d %d",$row,$col);
	for($i=0;$i<$row;$i++)
	{
		$line=trim(fgets(STDIN));
		$graph[$i]=str_split($line);

	}
	fprintf(STDOUT,"Case %d:\n",$count);

	$flag=0;
	for($i=0;$i<$row;$i++)
	{
		for($j=0;$j<$col;$j++)
		{
			if($graph[$i][$j]=="$")
			{
				fprintf(STDOUT,"%d,%d\n",$i+1,$j+1);
				$flag=1;
			}
		}
	}
	if($flag==0)
		echo "No Gold Found\n";
}
