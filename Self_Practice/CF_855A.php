<?php
fscanf(STDIN,"%d",$n);
for ($i=0; $i <$n ; $i++)
{
   $str[$i]=trim(fgets(STDIN));
}
echo "NO\n";
for ($i=1; $i <$n ; $i++)
{ 
	for ($j=0; $j <$i ; $j++)
	{  $flag=0;
		# code...
		if($str[$i]==$str[$j])
		{
			$flag=1;
			echo "YES\n";
			break;
		}

	}
		if($flag==0)
			echo "NO\n";

}