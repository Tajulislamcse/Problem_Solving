<?php


//because of why i did not else condition//
/*
কারন আমার স্ট্রিং আছে দুইটা আমি চাই ছোট স্ট্রিং  টার দৈর্ঘ্য অনুসারে লুপটা ঘোরাবো । তাই প্রথম স্ট্রিং টা ছোট 
অথবা বড় যেটাই হোক না কেন swap করে আমি len1 এর মধ্যে ছোট টা রাখব । চিন্তা করে দেখ আমার হাতে অপশন
আছে দুইটা । হয় বড় length এর স্ট্রিং টা প্রথম ইনপুট দিব নইত ছোট টা আমি চাই ছোটটা  len1 এর মধ্যে রাখব । যেহেতু len1 এর মধ্যে 
প্রথম স্ট্রিং টা ইনপুট নিয়ে রাখছি । তাই কেবল মাত্র প্রথম স্ট্রিং টা বড় হলেই condition apply করতে হবে । অর্থাৎ
swap করতে হবে । আর ছোট হলে কোন problem নাই । করন আমিতো চাইই প্রথম টা ছোট রাখতে । তাই আমি বড় এর জন্য condition
apply করছি ।
*/


$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

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
    $temp=$len1;
    $len1=$len2;
    $len2=$temp;
}
//echo "length1:".$len1."\n";
//echo "\n";
//echo "length2:".$len2."\n";


