<?php
fscanf(STDIN,"%s",$s);
echo checkif($s);
function checkif($s)
{
	if(is_numeric($s))
	{
		echo "id\n";
	}
	else
		echo "batchNo";
}