<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

//fscanf(STDIN, "%d\n", $number);
//$str="23,44,70,25,90,17";

//fscanf(STDIN,"%s",$str);
$str=fgets(STDIN);
echo $rmvspce=str_replace(' ',',',$str);
$str2=explode(',',$rmvspce);
var_dump($str2)

//for($i=0;$i<count($str2)-1;$i++)
//{
  //if(($i%2)==1)
  // continue;
  
    //else
    // echo ($str2[$i]*2)."\n";
//}
//var_dump($store);
/*
for($i=0;$i<$number;$i++)
{  if($i==0)
   $restore[$i]=$store[$i];
   else $restore[$i]=$store[$i+1];
}
var_dump($restore);

//$rmvspce=explode(" ",$str);
//var_dump($str);
//fscanf(STDIN, "%d\n", $number);

//for($i=0;$i<strlen($str)-2;$i+=2)
//{
//echo(trim($rmvspce[$i],"")*2);
//echo (trim(($rmvspce[$i]),""))*2;
//echo $store[$i]+2;
//echo "\n";
//}
/*

for($i=0;$i<strlen($str)-2;$i+=2)
   {
     for($j=0;$j<strlen($str)-2;$j+=2)
     {
         if($store[$i]<$store[$j])

          {
              $temp=$store[$i];
              $store[$i]=$store[$j];
              $store[$j]=$temp;
          }
            

     }
   }
  //print_r($items);
   for($i=0;$i<strlen($str)-3;$i+=2)
   {
     /*
     if($i==count($items)-1)
     {
       echo rtrim($items[$i],",");
       echo"\n";
         break;
     }
     
  // echo"$store[$i],";
   // if($i+1==count($items)-1)
   // {
    // echo rtrim($items[$i],",");
     //echo"\n";
      //break;
    
    //echo"\n";
    //echo $store[strlen($str)-3]. "\n";
          
