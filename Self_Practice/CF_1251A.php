<?php
fscanf(STDIN,"%d",$tc);
while($tc--)
{
		$str=trim(fgets(STDIN));
		$str2="";
		$flag=0;
		$alpha="abcdefghijklmnopqrstuvwxyz";
		for ($i=0; $i <strlen($alpha) ; $i++)
		 { 
			 	$cnt=0;
				for ($j=0; $j <strlen($str) ; $j++)
				 { 
						if($alpha[$i]==$str[$j])
						{
			                 $cnt++;
			                if($cnt%2==1&&$j==strlen($str)-1)
			                 {
			                 	$str2.=$alpha[$i];
			                 	$flag=1;
			                 	break;
			                 }

						}
			             else
			             {

			                if($cnt%2==1)
			                 {
			                 	$str2.=$alpha[$i];
			                 	$flag=1;
			                 	break;
			                 }
			                 $cnt=0;


			             }
			             	
				 }
		 }
		 if($flag==0)
		 	echo " \n";
		 else
		 {
		 	$split=str_split($str2);
		 	sort($split);
		 	echo implode($split)."\n";
		 }
}