<?php
fscanf(STDIN,"%d %d",$n,$k);
fscanf(STDIN,"%s",$str);
$lcount=array();
$str1=str_split($str,$k);
//print_r($str1);
$a=array();
for ($i=0; $i <26 ; $i++)
 { 
	$a[$i]=0;
 }
 //print_r($a);
for ($i=0; $i <count($str1); $i++)
 { 
    if(count(array_unique(str_split($str1[$i])))==1)
    {

			     if(implode(array_unique(str_split($str1[$i])))=='a'&&strlen($str1[$i])==$k)
			     {
			            $a[0]++;
			     }
			     if(implode(array_unique(str_split($str1[$i])))=='b' &&strlen($str1[$i])==$k)
			      { 
			        	$a[1]++;
			      }
			     if(implode(array_unique(str_split($str1[$i])))=='c'&&strlen($str1[$i])==$k)
			      { 
			        	$a[2]++;
			      }
			     if(implode(array_unique(str_split($str1[$i])))=='d'&&strlen($str1[$i])==$k)
			      { 
			        	$a[3]++;
			      }
			     if(implode(array_unique(str_split($str1[$i])))=='e'&&strlen($str1[$i])==$k)
			      { 
			        	$a[4]++;
			      }
			     if(implode(array_unique(str_split($str1[$i])))=='f'&&strlen($str1[$i])==$k)
			      { 
			        	$a[5]++;
			      }
			     if(implode(array_unique(str_split($str1[$i])))=='g'&&strlen($str1[$i])==$k)
			      { 
			        	$a[6]++;
			      }
			     if(implode(array_unique(str_split($str1[$i])))=='h'&&strlen($str1[$i])==$k)
			      { 
			        	$a[7]++;
			      }
			     if(implode(array_unique(str_split($str1[$i])))=='i'&&strlen($str1[$i])==$k)
			      { 
			        	$a[8]++;
			      }
			     if(implode(array_unique(str_split($str1[$i])))=='j'&&strlen($str1[$i])==$k)
			      { 
			        	$a[9]++;
			      }
			     if(implode(array_unique(str_split($str1[$i])))=='k'&&strlen($str1[$i])==$k)
			      { 
			        	$a[10]++;
			      }
			      if(implode(array_unique(str_split($str1[$i])))=='l'&&strlen($str1[$i])==$k)
			      { 
			        	$a[11]++;
			      }
			      if(implode(array_unique(str_split($str1[$i])))=='m'&&strlen($str1[$i])==$k)
			      { 
			        	$a[12]++;
			      }
			      if(implode(array_unique(str_split($str1[$i])))=='n'&&strlen($str1[$i])==$k)
			      { 
			        	$a[13]++;
			      }
			      if(implode(array_unique(str_split($str1[$i])))=='o'&&strlen($str1[$i])==$k)
			      { 
			        	$a[14]++;
			      }
			      if(implode(array_unique(str_split($str1[$i])))=='p'&&strlen($str1[$i])==$k)
			      { 
			        	$a[15]++;
			      }
			      if(implode(array_unique(str_split($str1[$i])))=='q'&&strlen($str1[$i])==$k)
			      { 
			        	$a[16]++;
			      }
			      if(implode(array_unique(str_split($str1[$i])))=='r'&&strlen($str1[$i])==$k)
			      { 
			        	$a[17]++;
			      }
			      if(implode(array_unique(str_split($str1[$i])))=='s'&&strlen($str1[$i])==$k)
			      { 
			        	$a[18]++;
			      }
			      if(implode(array_unique(str_split($str1[$i])))=='t'&&strlen($str1[$i])==$k)
			      { 
			        	$a[19]++;
			      }
			      if(implode(array_unique(str_split($str1[$i])))=='u'&&strlen($str1[$i])==$k)
			      { 
			        	$a[20]++;
			      }
			      if(implode(array_unique(str_split($str1[$i])))=='v'&&strlen($str1[$i])==$k)
			      { 
			        	$a[21]++;
			      }
			      if(implode(array_unique(str_split($str1[$i])))=='w'&&strlen($str1[$i])==$k)
			      { 
			        	$a[22]++;
			      }
			      if(implode(array_unique(str_split($str1[$i])))=='x'&&strlen($str1[$i])==$k)
			      { 
			        	$a[23]++;
			      }
			      if(implode(array_unique(str_split($str1[$i])))=='y'&&strlen($str1[$i])==$k)
			      { 
			        	$a[24]++;
			      }
			      if(implode(array_unique(str_split($str1[$i])))=='z'&&strlen($str1[$i])==$k)
			         $a[25]++;  
    }



 }
echo max($a);