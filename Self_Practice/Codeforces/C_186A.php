<?php
$str1=trim(fgets(STDIN));
$str2=trim(fgets(STDIN));
$len1=strlen($str1);
$len2=strlen($str2);
if($len1!=$len2)
{
echo "NO\n";
}
else{
$j=0;
$count=0;
$a=array();
$b=array();
for ($i=0; $i <$len1 ; $i++)
{ 
	if($str1[$i]!=$str2[$i])
	 {
     $a[$j]=$str1[$i];
     $b[$j]=$str2[$i];
     $j++;
      $count++;
      if($count>2)
      {
      	//$flag=1;
      	//echo "NO";
      	break;
      }
     } 
}



if($count==2&&$a[1]==$b[0]&&$a[0]==$b[1])
	echo "YES\n";
else
	echo "NO";


}
