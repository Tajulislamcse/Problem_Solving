<?php
$line=trim(fgets(STDIN));
$singleValue=explode(" ",$line);
//print_r($singleValue);
echo "Enter search item: ";
fscanf(STDIN,"%d",$item);
$first=0;
$last=count($singleValue)-1;
$flag=0;

//$loopCount=0;
//$count=0;
for($i=0;$i<count($singleValue)-1;$i++)
{
    //$loopCount++;
    echo "first:$first last:$last\n";
	$mid=floor(($first+$last)/2);
    $loopCount=$i+1;

       //$count++;
	if($item==$singleValue[$mid])
	{    $flag=1;
		$loc=$mid+1;
		echo "$item found at location $loc\n";
		echo "Total number of step:$loopCount";
		//echo "loop count:$count";
		break;

	}
	elseif ($item>$singleValue[$mid]) {
		$first=$mid;
		
	}
	else
	{
	$last=$mid-1;	
	}
}
//$loopCount=$i+1;
if($flag==0)

echo "Item not found\nTotal number of step $loopCount";


