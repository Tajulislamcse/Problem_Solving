<?php

fscanf(STDIN,"%d\n",$testcase);
while ($testcase--) {
  
 fscanf(STDIN,"%d\n",$number);
 for($i=0;$i<$number*2;$i++)
{
	$str[$i]=trim(fgets(STDIN));
}

for($i=$number;$i<$number*2;$i++)
{
  $arr[$i]=explode(",",$str[$i]);
}

for($i=$number;$i<$number*2;$i++)
{
  
	for ($j=0; $j <1 ; $j++) { 
		$message[$arr[$i][$j]]=$arr[$i][$j+1];
	}
}
/*
 if (array_values($message)=="Success") 
 {
 	# code...
 	echo "Success list"."\n";
 }
 else
 	echo "Failed list"."\n";
 */	

print_r($message);
}
