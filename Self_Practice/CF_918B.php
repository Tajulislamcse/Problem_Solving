<?php
fscanf(STDIN,"%d %d",$n,$m);
for ($i=0; $i <$n ; $i++)
 { 
	list($name[$i],$ip1[$i])=explode(" ",trim(fgets(STDIN)));
	//$ip1[$i]=$ip1.';';
}
for ($i=0; $i <$m ; $i++)
{ 
	list($command[$i],$ip2[$i])=explode(" ",trim(fgets(STDIN)));
	$ip3[$i]=rtrim($ip2[$i],";");
}
for ($i=0; $i <$m ; $i++)
{ 
	for ($j=0; $j <$n ; $j++)
	 { 
	 	if($ip3[$i]==$ip1[$j])
	 		echo "$command[$i] $ip2[$i] #$name[$j]\n";

	  }	      
	
}
