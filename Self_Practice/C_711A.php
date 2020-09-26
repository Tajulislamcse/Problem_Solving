<?php
fscanf(STDIN,"%d",$n);
for($i=0;$i<$n;$i++)
{
	$str=trim(fgets(STDIN));
	$cnvrtArr[$i]=explode('|', $str);
}
//print_r($cnvrtArr);
$flag=0;
for($i=0;$i<$n;$i++)
{
	for($j=0;$j<2;$j++)
	{
		if($cnvrtArr[$i][$j]=='OO')
		{  
			//echo "YES\n";
			$cnvrtArr[$i][$j]='++';
			$flag=1;
			break;

		}

	}
	if($flag==1)
		break;

}
if($flag==1)
{
	echo "YES\n";
	for($i=0;$i<$n;$i++)
	{
	 for($j=0;$j<2;$j++)
	  {  
	  	if($j==0)
			echo $cnvrtArr[$i][$j]."|";
         else
		echo $cnvrtArr[$i][$j];

		}
		echo "\n";
	}
}
if($flag==0)
	echo "NO";
