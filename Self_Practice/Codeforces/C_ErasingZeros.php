<?php
fscanf(STDIN,"%d",$n);
while ($n--) {
	$str=trim(fgets(STDIN));
	if ($str==0) 
			echo "0\n";
		else
		{
			$rmvZero=trim($str,0);
			$count=0;
			for($i=0;$i<strlen($rmvZero);$i++)
			{
				
				if($rmvZero[$i]=='0')
					$count++;
			}
			echo "$count\n";

		}
	
}