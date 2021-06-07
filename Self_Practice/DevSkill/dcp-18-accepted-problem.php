<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN,"%d",$t);//input testcase
while($t--)// it will be false when it will be zero
{
fscanf(STDIN, "%d\n", $number);//how much number will given 
$str=fgets(STDIN);//input number in a single line as a string as like as 0.55 -3.2 0 27 9.99 -127

//$rmvspce=str_replace(' ',',',$str);

$rmvspce=explode(" ",$str);//divided to numbers based on space. Mind that when we use explode() it converted an array;
$array=preg_replace('/\s+/','',$rmvspce);//if you use explode ,extra two character automatically placed 
//on the last element of string and show extra two length of last element of string,so replaced by '' 
//character finally all string as like as '0.55','-3.2' so on

 
 $size=sizeof($array);//sizeof() or count() are same; it is used to find size of array not string.
 

 for($i=0;$i<$size;$i++)
{
    // echo"array[$i]:". ($array[$i]*2)."\n";
    for($j=0;$j<$size-1;$j++)//compared will happend less than one of size for example if contain two element compared happend one as like as 2 3 compared had one time
           if($array[$i]<$array[$j])//just swapped two element
           {
               $temp=$array[$i];
               $array[$i]=$array[$j];
               $array[$j]=$temp;

           }   


}
for($i=0;$i<$size-1;$i++)//less than one of size because i would like to skipped to last element because last element has no comma sign.
 echo"$array[$i],";
 echo $array[$size-1]."\n";//so it printed out of for loop because i would like to print as like as -127,-3.2,0,0.55,9.99,27 //i see last element has no comma

}
