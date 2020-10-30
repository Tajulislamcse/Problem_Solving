<?php
fscanf(STDIN,"%d %d",$len,$k);
fscanf(STDIN,"%s",$str);
$obstract=array();
for ($i=0; $i <$len ; $i++) 
{ 
	if($str[$i]=='T')
		$target=$i;
	 if($str[$i]=='G')
	 	$start=$i;
	 

}
if($start>$target)
 {
	$tmp=$start;
	$start=$target;
	$target=$tmp;
}



     // $obstract=0;

	   for ($i=$start; $i+=$k)
	    {      
	    	   //echo "i=$i target=$target\n";
		       if($i>$target)
		       {
		       	  echo "NO\n";
		       	  break;
		       }
		   	   if($i==$target)
		   	   {
		   	   	   echo "YES\n";
		   	   	   break;
		   	   }
		   	    
		   	   if($str[$i]=='#')
		   	   {
		   	   	  echo "NO\n";
		   	   	  break;
		   	   }


	    }
	    
	    	

/*
if($flag==1)
	echo "YES\n";
else
	echo "NO\n";
*/