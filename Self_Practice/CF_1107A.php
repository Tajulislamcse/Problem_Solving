<?php
fscanf(STDIN,"%d",$tc);
while($tc--)
{     
	  fscanf(STDIN,"%d",$len);
	  fscanf(STDIN,"%s",$num);
	  //$digits='123456789';
	  //$str="";
	  $len=strlen($num);
      
      if($len==2)
       	{
       		if($num[0]<$num[1])
       	 	   echo "YES\n2\n$num[0] $num[1]\n";
       	 	else
       	 		echo "NO\n";

       	}
       
       	else
       	{
       	 	echo "YES\n2\n$num[0] ";
       	 	echo substr($num,1,$len-1)."\n";
       	}
}