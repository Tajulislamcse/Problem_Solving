<?php
fscanf(STDIN,"%d",$n);
$str=trim(fgets(STDIN));
$eve=[
		 "vaporeon",
		 "jolteon",
		 "flareon", 
		 "espeon", 
		 "umbreon",
		 "leafeon", 
		 "glaceon", 
		 "sylveon"
    ];


if($str=='......')
   echo "espeon";
elseif ($str=='........')
 {
 	echo "vaporeon";
	# code...
}



else
{
   $flag=0;
   $max=0;
   //$length=9;
   $trgetStr=findTrgtStr($str);
		for ($i=0; $i <count($eve) ; $i++)
		{   

			$count=0;

		   for ($j=0; $j <5 ; $j++)
		    { 
		     
		   	   if($eve[$i][$j]==$trgetStr[$count])
		   	   {
		               
		   	   	   $count++;
		   	   	  // $str3=$eve[$i];

		   	   	   if($count==strlen($trgetStr))
		   	   	   {
		             //echo "$str3\n";
		   	   	   	$flag=1;
		   	   	   	break;
		   	   	   }
		   	   }
		   	        
		    }   

		          

		          if($count>=$max&&strlen($eve[$i])==$n)
		          {
		          	$max=$count;
		          	//$length=strlen($eve[$i]);
		          	$str3=$eve[$i];
		          }
		          //echo "$max\n";

		   
		   
		}	
		print_r($str3);
}

function findTrgtStr($str)
{
			$trgetStr="";
		for ($i=0; $i <strlen($str) ; $i++)
		{ 
			if($str[$i]=='.')
				continue;
			else
				$trgetStr.=$str[$i];

		}
		return $trgetStr;
}