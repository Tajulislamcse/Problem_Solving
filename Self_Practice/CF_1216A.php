<?php
fscanf(STDIN,"%d\n",$evenLength);
$str1=trim(fgets(STDIN));
$str2="";
$count=0;
for ($i=0; $i <$evenLength ; $i+=2)
{ 
   $str3=substr($str1,$i,2);
   if($str3=='aa')
   	{
      $str2.='ba';
      $count++;
   	}
   elseif ($str3=='bb')
    {
      $str2.='ab';
      $count++;
    }
   else
   	$str2.=$str3;
 	

}
echo "$count\n$str2";
