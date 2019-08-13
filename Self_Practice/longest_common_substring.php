
<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN,"%d",$tc);
while($tc--)
{
fscanf(STDIN,"%s\n",$str1); // take input first string

 $len1=strlen($str1);     //  find first string length
 //echo"length1:".$len1."\n";//print first string length
 //echo"\n";

fscanf(STDIN,"%s\n",$str2); // take input seccond string

 $len2=strlen($str2);  // find seccond string length
 //echo "length2:".$len2."\n"; //print seccond string length
 //echo"\n";
// i want , according to your wish , give input  a  string that can be small length or big length but i always store
//in  small length's string in a len1 variable. why use that type store? because i would like to looping the loop
// according to first string size.
if($len1>$len2)
{
    $temp=$str1;
    $str1=$str2;
    $str2=$temp;
}
// বিস্তারিত reusuability code  এর মধ্যে different_length_string_two_string.php file এ বর্ণনা করা আছে।
$count=0;

for($i=0;$i<strlen($str1);$i++)
{
 for($j=0;$j<strlen($str2);$j++)
 {
   if($str1[$i]==$str2[$j])
      {
        $count++;
        echo "$str1[$i] :".$count."\n";
        
        
        break; 

      }
      echo $count."\n";
  }
  
  //echo "tajul"."\n";
}
}

