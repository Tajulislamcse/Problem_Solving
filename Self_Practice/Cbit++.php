<?php
$x=0;
fscanf(STDIN,"%d",$tc);
for($i=0;$i<$tc;$i++)
  {
  	fscanf(STDIN,"%s",$str);
  	if (strcmp($str,"X++")==0||strcmp($str,"++X")==0)
  		$x++;
  		else if (strcmp($str,"X--")==0||strcmp($str,"--X")==0)
  			$x--;
  		  		
  	
  }
echo "$x";