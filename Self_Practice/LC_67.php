<?php
fscanf(STDIN,"%s %s",$a,$b);
$lena=strlen($a);
if($a<$b)
{  
   $a=$a.$b;
   $b=substr($a,0,$lena);
   $a=substr($a,strlen($b));
}
$b=str_repeat('0',strlen($a)-strlen($b)).$b;
$ans="";
$cary=0;
for ($i=strlen($a)-1;$i>=0; $i--)
{ 
   if($a[$i]+$b[$i]+$cary==1)
   {
     $ans.=1;
     $cary=0;
   }
   elseif($a[$i]+$b[$i]+$cary==2)
   {
   	$ans.=0;
   	$cary=1;
   }
   elseif ($a[$i]+$b[$i]+$cary==3)
    {
    	$ans.=1;
    	$cary=1;
    }
    else
    {
    	$ans.=0;
    	$cary=0;
    }
}
$rev=strrev($ans);
echo ltrim($cary.$rev,'0');
//echo "$ans $cary";