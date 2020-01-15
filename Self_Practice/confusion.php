<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
for ($i=0; $i <2 ; $i++) 
{ 
  # code...
  $line[$i]=trim(fgets(STDIN));
}
 echo "after explode"."\n";
for ($i=0; $i <2 ; $i++) { 
	# code...
	$arr[$i]=explode(" ", $line[$i]);

}
for ($i=0; $i <2 ; $i++) { 

	for ($j=0; $j <4; $j++) { 
		# code.
		echo $arr[$i][$j]."\n";
	}
	# code...
}