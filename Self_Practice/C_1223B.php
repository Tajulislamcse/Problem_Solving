<?php
fscanf(STDIN,"%d",$tc);
while($tc--)
{
$str1=trim(fgets(STDIN));
$str2=trim(fgets(STDIN));
$flag=0;
for ($i=0; $i <strlen($str1) ; $i++)
{ 
	for ($j=0; $j <strlen($str1) ; $j++)
	{ 
       if($str1[$i]==$str2[$j])
       	   {
       	   	$flag=1;
       	   	echo "YES\n";
       	   	break;
       	   }
	}
	if($flag==1)
		break;
}
if($flag==0)
echo "NO\n";
}