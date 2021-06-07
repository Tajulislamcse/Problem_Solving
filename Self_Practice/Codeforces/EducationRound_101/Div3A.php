<?php
fscanf(STDIN,"%d",$tc);
while($tc--)
{
	fscanf(STDIN,"%s %s %d",$w,$h,$n);
	if($n==1)
		echo "YES\n";
	else
	{
		$cnt=0;
	 while($w%2==0)
	 {
	 	$w=$w/2;
	 	$cnt+=2;
	 }
	 	 while($h%2==0)
	 {
	 	$h=$h/2;
	 	
	 	$cnt+=2;
	 }
	 //echo "$cnt\n";
	 if($cnt<$n)
	 	echo "NO\n";
	 else
	 	echo "YES\n";


	}

}