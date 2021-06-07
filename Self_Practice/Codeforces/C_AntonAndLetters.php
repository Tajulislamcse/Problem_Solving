<?php
$set=trim(fgets(STDIN));
if ($set=="{}") {
	echo "0";
}
else{
$rmvbrket=trim($set,'{}');
$rmvspace=str_replace(', ','',$rmvbrket);

$count=0;
$alpbet="abcdefghijklmnopqrstuvwxyz";
for($i=0;$i<strlen($alpbet);$i++)
{
	for($j=0;$j<strlen($rmvspace);$j++)
	{
		if($alpbet[$i]==$rmvspace[$j])
		{
			$count++;
			break;
		}

	}
}
echo "$count";
}