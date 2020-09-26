<?php
fscanf(STDIN,"%s",$str);
//$str1="";
//$op="+";
if(strlen($str)==1)
	echo "$str";
else{
	$num=explode('+', $str);
	sort($num);
	//for($i=0;$i<count($num);$i++)
        $str1=implode('+', $num);
    echo $str1;

}