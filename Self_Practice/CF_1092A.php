<?php
fscanf(STDIN,"%d",$tc);
while($tc--)
{
	fscanf(STDIN,"%d %d",$n,$k);
	$alpahabet="abcdefghijklmnopqrstuvwxyz";
	$substr=substr($alpahabet,0,$k);
	//echo "$substr";
	$str="";
	$flag=0;
	for ($i=0; $i <$n ; $i++)
	 { 
		  for ($j=0; $j <strlen($substr) ; $j++)
		   { 
		  	   $str.=$substr[$j];
		  	   if(strlen($str)==$n)
		  	   {
                 echo "$str\n";
                 $flag=1;
                 break;
		  	   }
		   }
		   if($flag==1)
		   	 break;
	 }	
	
}