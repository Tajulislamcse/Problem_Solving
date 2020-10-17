<?php
fscanf(STDIN,"%d\n",$tc);
while ($tc--) 
{
	fscanf(STDIN,"%d\n",$lengthOfStr);
	$str1=trim(fgets(STDIN));
	$str2=trim(fgets(STDIN));
    $cnt=0;
    $j=0;
    $a=array();
    $b=array();
	for ($i=0; $i <$lengthOfStr ; $i++)
	{ 
		if($str1[$i]!=$str2[$i])
		{
			$cnt++;
			echo "cnt=$cnt\n";
			$a[$j]=$str1[$i];
			echo "a[$j]=$a[$j]\n";
			$b[$j]=$str2[$i];
			echo "b[$j]=$b[$j]\n";
			$j++;
		}
		if($cnt==3)
			break;

		
	}
	if($cnt==2&&$a[0]==$a[1]&&$b[0]==$b[1])
		echo "Yes\n";
	else
		echo "No\n";
}