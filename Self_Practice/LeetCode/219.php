<?php
$nums=explode(' ',trim(fgets(STDIN)));
fscanf(STDIN,"%d",$k);
$v=[];
for ($i=0; $i <count($nums) ; $i++)
 { 
	$v[$nums[$i]]=1;
 }
 $i=0;
 $uniqueArr=[];
 foreach ($v as $key => $value)
  {
 	$uniqueArr[$i++]=$key;
  }
  $flag=0;
  for ($i=0; $i <count($uniqueArr) ; $i++)
  { 
     $pos=[];

      for ($j=0,$l=0; $j <count($nums) ; $j++)
       { 
      		if($uniqueArr[$i]==$nums[$j])
      			$pos[$l++]=$j;
       }
       if(checkDuplicates($pos,$k)==true)
       {
       	$flag=1;
       	echo "true";
       	break;
       }


      
   }
   if($flag==0)
   	echo "false";
       function checkDuplicates($pos,$k)
       	{
       		for ($i=count($pos)-1; $i>=1; $i--)
       		 { 
       			$dif=$pos[$i]-$pos[$i-1];
                 if($dif<=$k)
                 	return true;
            

       		 }
       	}