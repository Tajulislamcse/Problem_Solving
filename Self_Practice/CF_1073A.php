<?php
fscanf(STDIN,"%d",$len);
fscanf(STDIN,"%s",$str);
if(count(array_unique(str_split($str)))==1)
	echo "NO";
else
{  
	for($i=0;$i<$len-1;$i++)
	{
	   $str1=substr($str,$i,2);
	   if($str1[0]!=$str1[1])
	   {
	   	  echo "YES\n$str1";
	   	  break;
	   }

	}
	   
	
}
 	
 
