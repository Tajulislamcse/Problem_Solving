<?php
fscanf(STDIN,"%d",$k);
$str=trim(fgets(STDIN));
$split=str_split($str);
$unqChr=implode(array_unique($split));
echo "unqChr=$unqChr";
if(strlen($unqChr)<$k)
	echo "NO\n";
elseif($k==1)
	echo "YES\n$str";
else
{
		echo "YES\n";
		$str2="";
	    $len=strlen($str);
	   for ($i=0,$j=1; $i <$len ; $i++) 
		{ 
		
			if($str[$i]==$unqChr[$j])
			{
		          echo $str2."\n";
		          $k--;
		          if($k==1)
		          {
		          	echo substr($str,$i);
		          	break;
		          }
		          $j++; 
		          $str2="";  
			}
			$str2.=$str[$i];
		}
	
}