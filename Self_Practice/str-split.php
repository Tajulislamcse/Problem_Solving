<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN,"%d",$t);
while($t--)
{
fscanf(STDIN, "%d\n", $number);
$str=fgets(STDIN);

//$rmvspce=str_replace(' ',',',$str);

$rmvspce=explode(" ",$str);
$array=preg_replace('/\s+/','',$rmvspce);

 
 $size=sizeof($array);
 

 for($i=0;$i<$size;$i++)
{
    // echo"array[$i]:". ($array[$i]*2)."\n";
    for($j=0;$j<$size-1;$j++)
           if($array[$i]<$array[$j])
           {
               $temp=$array[$i];
               $array[$i]=$array[$j];
               $array[$j]=$temp;

           }   


}
for($i=0;$i<$size-1;$i++)
 echo"$array[$i],";
 echo $array[$size-1]."\n";

}
