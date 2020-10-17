<?php
fscanf(STDIN,"%d %d",$n,$m);
$table=array();
for ($i=0; $i <$n ; $i++)
 { 
   $table[$i]=str_split(trim(fgets(STDIN)));
 }
 //print_r($table);
 //$image="face";
 $imageCount=0;
 for ($i=0; $i <$n-1 ; $i++)
  { 
 	for ($j=0; $j <$m-1 ; $j++)
 	 { 
 	 	//$charCount=substr_count($image,$table[$i][$j]);
 	 	//echo "$charCount\n";
 	 	   if($table[$i][$j]=='f')
            {
		 		if(($table[$i][$j+1].$table[$i+1][$j].$table[$i+1][$j+1]=='ace')||($table[$i][$j+1].$table[$i+1][$j].$table[$i+1][$j+1]=='cea')||($table[$i][$j+1].$table[$i+1][$j].$table[$i+1][$j+1]=='eca')||($table[$i][$j+1].$table[$i+1][$j].$table[$i+1][$j+1]=='cae')||($table[$i][$j+1].$table[$i+1][$j].$table[$i+1][$j+1]=='aec')||($table[$i][$j+1].$table[$i+1][$j].$table[$i+1][$j+1]=='eac'))
		 			
		 		{
	              
		 			$imageCount++;
		        }
	       } 
	       if($table[$i][$j]=='a')
	       {
		        if (($table[$i][$j+1].$table[$i+1][$j].$table[$i+1][$j+1]=='fce')||($table[$i][$j+1].$table[$i+1][$j].$table[$i+1][$j+1]=='cef')||($table[$i][$j+1].$table[$i+1][$j].$table[$i+1][$j+1]=='ecf')||($table[$i][$j+1].$table[$i+1][$j].$table[$i+1][$j+1]=='cfe')||($table[$i][$j+1].$table[$i+1][$j].$table[$i+1][$j+1]=='fec')||($table[$i][$j+1].$table[$i+1][$j].$table[$i+1][$j+1]=='efc'))
		         {
		        	$imageCount++;
		        	# code...
		         }
	       }
	       if ($table[$i][$j]=='c')
	       {
		         if (($table[$i][$j+1].$table[$i+1][$j].$table[$i+1][$j+1]=='fae')||($table[$i][$j+1].$table[$i+1][$j].$table[$i+1][$j+1]=='aef')||($table[$i][$j+1].$table[$i+1][$j].$table[$i+1][$j+1]=='eaf')||($table[$i][$j+1].$table[$i+1][$j].$table[$i+1][$j+1]=='afe')||($table[$i][$j+1].$table[$i+1][$j].$table[$i+1][$j+1]=='fea')||($table[$i][$j+1].$table[$i+1][$j].$table[$i+1][$j+1]=='efa'))
		           {
		        	$imageCount++;
		        	# code...
		           }
	        }
	        if ($table[$i][$j]=='e')
	        {   
		         if (($table[$i][$j+1].$table[$i+1][$j].$table[$i+1][$j+1]=='fca')||($table[$i][$j+1].$table[$i+1][$j].$table[$i+1][$j+1]=='caf')||($table[$i][$j+1].$table[$i+1][$j].$table[$i+1][$j+1]=='acf')||($table[$i][$j+1].$table[$i+1][$j].$table[$i+1][$j+1]=='cfa')||($table[$i][$j+1].$table[$i+1][$j].$table[$i+1][$j+1]=='fac')||($table[$i][$j+1].$table[$i+1][$j].$table[$i+1][$j+1]=='afc'))
		          {
		        	$imageCount++;
		        	# code...
		          }
	       }

 		}
  }
  echo "$imageCount";