<?php
fscanf(STDIN,"%d",$n);
$num=explode(' ',trim(fgets(STDIN)));
for($i=0;$i<$n;$i++)
{
	

   for($j=2;$j<=$num[$i]/2;$j++)
   {
   	if($num[$i]%$j==0)
   	{
   		$flag=1;
   	}
   	if($count=="1")
   	{
   		echo "YES\n";
   		break;
   	}
   	else
   		echo "NO\n";
   }
}
	