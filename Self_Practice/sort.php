<?php
//$a="0.55";
//echo trim($a,"");




$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
 // $count=0;
  //$text1="No";
  //$text2="Yes";
  fscanf(STDIN, "%d", $testcases);
//$number=array();
//$graph=array();
for($t=1;$t<=$testcases;$t++)

{
fscanf(STDIN, "%d\n", $number);
//for($i=0;$i<$row;$i++)
//$graph[$i]=array();
   $items=explode(" ",fgets(STDIN));
    //$str1=str_split($str);
  // print_r($items);

  //for($i=0;$i<$number;$i++)
  // $items[$i]=trim(($items[$i])," ");//conver just integer number;
    //fscanf(STDIN, "%d\n", $items[$i]);
   //  $items=explode(" ",$str);
   //  $it2=str_split($items);

 //var_dump($items);

  

for($i=0;$i<$number;$i++)
   {
     for($j=0;$j<$number;$j++)
     {
         if($items[$i]<$items[$j])

          {
              $temp=$items[$i];
              $items[$i]=$items[$j];
              $items[$j]=$temp;
          }
            

     }
   }
  //print_r($items);
   for($i=0;$i<$number;$i++)
   {
     /*
     if($i==count($items)-1)
     {
       echo rtrim($items[$i],",");
       echo"\n";
         break;
     }
     */
   echo"$items[$i],";
   // if($i+1==count($items)-1)
   // {
    // echo rtrim($items[$i],",");
     //echo"\n";
      //break;
    } 
    //echo"\n";
    echo $items[$number-1]. "\n";
          
//number_format($items[$i], 2, '.', '');
      //echo number_format($items[$i],2);
      
//print("$items[$i],");
     //echo"\n";

}

