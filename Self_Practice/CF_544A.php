<?php
fscanf(STDIN,"%d",$k);
$str=trim(fgets(STDIN));
$len=strlen($str);
if($len<$k)
	echo "NO";
elseif ($k==1)
 {
	echo "YES\n";
	echo "$str";
 }
 else
 {
	 	//$cnt=0;
	    $str1=array();
	    $start=array();
	    $str1[0]=$str[0];
	    $j=1;
	    $start[0]=0;
	 	for ($i=1; $i <=$len-1 ; $i++)
	 	{     // echo $str1[$i-1]."\n";
	 			//$str1[++$j]=$str[$i];
	            $occrCnt=0;
	 		for ($p=0; $p <count($str1) ; $p++)
	 		 { 
	 		    if($str1[$p]!=$str[$i])
	 		    	$occrCnt++;
	 		    if($occrCnt==count($str1))
	 		    {
	 		    	$start[$j++]=$i;
	 		    	//echo "$start\n";

	 		    	//$str1[$j++]=substr($str,);
	 		    }
	 			
	 		 }
	           
	 	}
	 	
	 	print_r($start);
	 	
 }