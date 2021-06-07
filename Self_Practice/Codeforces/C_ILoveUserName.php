<?php
fscanf(STDIN,"%d",$n);
$line=trim(fgets(STDIN));
$arr=explode(" ",$line);
$count=0;
$max=$arr[0];
$min=$arr[0];
for($i=0;$i<count($arr);$i++)
    {
    	if($arr[$i]>$max){
    		$max=$arr[$i];
    		$count++;
    	}
    	elseif ($arr[$i]<$min) {
    		$min=$arr[$i];
    		$count++;
    	}
    }
    echo "$count";



//echo $count;