<?php
fscanf(STDIN,"%d",$tc);
while($tc--)
{
	fscanf(STDIN,"%d",$n);
	fscanf(STDIN,"%s",$str);
	for ($i=$n-1,$cnt=0; $i>=0 ; $i--) 
	{ 
		if($str[$i]==')')
			$cnt++;
		else
			break;
	}
	 $remain=$n-$cnt;
	 if($cnt>$remain)
	 	echo "Yes\n";
	 else
	 	echo "No\n";
}