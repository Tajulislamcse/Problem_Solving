<?php
fscanf(STDIN,"%d",$strlength);
$str=trim(fgets(STDIN));
//$str1=substr($str, 0,1);
if($strlength==1)
   echo "1\n1";
//ech

for ($i=1; $i <strlen($str) ; $i++)
{ 
    $str1=substr($str,0,strlen($str)-$i);
    $str2=substr($str,strlen($str)-$i,$i);
    //echo "$str1 $str2\n";

     $first=resizeStr1($str1);
     //print_r($first)."\n";
     $second=resizeStr2($str2);
     if($first[0]!=$first[1]&&$second[0]!=$second[1])
     {
     	echo "2\n$str1 $str2";
     	break;
     }

	
}
function resizeStr1($str1)
{
	$alpha="10";
	//$count=0;
	$store1=array();
	for ($i=0; $i <strlen($alpha) ; $i++)
	{ 
	   $count=0;

		for ($j=0; $j <strlen($str1) ; $j++)
		 { 
			if($alpha[$i]==$str1[$j])
				$count++;

		}
			$store1[$i]=$count;


	}
	return $store1;
}
function resizeStr2($str2)
{
	$alpha="10";
	$store2=array();
	for ($i=0; $i <strlen($alpha) ; $i++)
	{ 
	   $count=0;

		for ($j=0; $j <strlen($str2) ; $j++)
		 { 
			if($alpha[$i]==$str2[$j])
				$count++;
		}
		$store2[$i]=$count;
	}
	return $store2;
}
