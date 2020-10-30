<?php
fscanf(STDIN,"%d",$len);
fscanf(STDIN,"%s",$str);
$cnt=0;
$i=0;
while($i<$len)
{
	if($str[$i]=='x'&&$str[$i+1]=='x')
	  {
	  	   $i+=2;
	  	   //echo "i=$i\n";
	  	   if($i==$len)
	  	   break;
	  	   while($str[$i]=='x')
	  	   	{
	  	   	     $cnt++;
	  	   	     $i++;
	  	         if($i==$len)
	  	         break;

	  	   	}

	  }
	  else
	  {
	  	  $i++;
	  }
}
echo "$cnt";