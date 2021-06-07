<?php
fscanf(STDIN,"%d",$n);
$mas=0;
$cha=0;
for($i=0;$i<$n;$i++){
	fscanf(STDIN,"%d %d",$m[$i],$c[$i]);
	if($m[$i]>$c[$i])
	{
		$mas++;
	}
	elseif ($m[$i]<$c[$i]) {
		$cha++;
		# code...
	}
	else{
		$mas++;
	   $cha++;
	}

}
	if($mas>$cha)
		echo "Mishka";
	elseif ($mas<$cha) {
		echo "Chris";
	}
	else
		echo "Friendship is magic!^^";