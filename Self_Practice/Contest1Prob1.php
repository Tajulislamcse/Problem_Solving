<?php
fscanf(STDIN,"%d\n",$tc);
while ($tc--)
{
	fscanf(STDIN,"%d %d",$apartment,$floorNumber);
	if($apartment==1||$apartment==2)
		echo "1\n";
	else
	{
		$floor=ceil(($apartment-2)/$floorNumber)+1;
		echo "$floor\n";
	}
}