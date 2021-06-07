<?php
$licensePlate=trim(fgets(STDIN));
$words=explode(' ',trim(fgets(STDIN)));
 $pattern="/[^a-z]+/i";
 $licensePlate=preg_replace($pattern,'',strtolower($licensePlate));
 $v=array();
 for($i=0;$i<strlen($licensePlate);$i++)
 {
 	$v[$licensePlate[$i]]=1;

 }
 $uniqueLp="";
 foreach ($v as $key => $value)
 {
 	$uniqueLp.=$key;
 }
 $min=15;
 foreach ($words as $word)
 {
 	if(countOccurrence($word,$licensePlate,$uniqueLp)==true)
 		{
 			if(strlen($word)<$min)
 			{
 				$min=strlen($word);
 				$output=$word;
 			}
 		}
 }
 echo $output;
 function countOccurrence($word,$licensePlate,$uniqueLp)
 {
 	$cnt=0;
 	for($i=0;$i<strlen($uniqueLp);$i++)
 	{
 		$wrdCnt=wordByCharacter($uniqueLp[$i],$word);
 		$licCnt=LPByCharacter($uniqueLp[$i],$licensePlate);
 		if($wrdCnt>=$licCnt)
 			$cnt++;


 	}
 	if($cnt==strlen($uniqueLp))
 		return true;
 	else
 		return false;
 }
 function wordByCharacter($str1,$str2)
 {
 	$cnt=0;
     for ($i=0; $i <strlen($str2) ; $i++)
     { 
        if($str1==$str2[$i])
           $cnt++;	
     }
     return $cnt;
 }
  function LPByCharacter($str1,$str2)
 {
 	$cnt=0;
     for ($i=0; $i <strlen($str2) ; $i++)
     { 
        if($str1==$str2[$i])
           $cnt++;	
     }
     return $cnt;
 }