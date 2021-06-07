<?php
fscanf(STDIN,"%d",$tc);
while($tc--)
{
	fscanf(STDIN,"%d\n",$len);
	fscanf(STDIN,"%s\n",$str);


		$str2="";
		$b="";
		for ($i=0,$k=0; $i <strlen($str) ; $i++)
		 { 
			if($str[$i]=='b')
               {
               	$b.=$str[$i];

               	continue;
               	 
               }
               else
               	 $str2.=$str[$i];

		 }
	  echo $b.$str2."\n";

	

}