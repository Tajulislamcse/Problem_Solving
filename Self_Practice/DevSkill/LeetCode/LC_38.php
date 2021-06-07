<?php
fscanf(STDIN,"%s",$n);
echo CountAndSay($n);
function CountAndSay($n)
{
    if($n==1)
  	return 1;
    else
    {  $i=1;
    	$n=$n-1;
        while($n--)
        {
          $s=CountS($i);
          $i=$s;
        }
        return $i;
    }
}
function CountS($value)
{
  if($value=="1")
  {
  	return "11";
  }
  elseif($value=="11")
  	return "21";
  else
  {
     $grpChr=array();
     $str1="";
     $str2="";
     $cnt=0;
      for ($i=0,$j=0; $i <strlen($value)-1 ; $i++)
      { 
          $str1.=$value[$i];
          $cnt++;

         if($value[$i]!=$value[$i+1])
         {
         	$last=$i+1;
         	$str1;
         	$str2.=$cnt.$str1[0];
            $str1="";
         	$cnt=0;
         }
      }
      $leftStr=substr($value,$last);
      $str2.=strlen($leftStr).$leftStr[0];
      return $str2;
  }
  }