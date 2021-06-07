<?php
fscanf(STDIN,"%d\n",$tc);
while($tc--)
{
   fscanf(STDIN,"%s\n",$str);
   if($str[0]=="r")
   echo "Run Time Error\n";
 else if($str[0]=="w")
    echo "Wrong Answer\n";
 elseif ($str[0]=="a") 
     echo "Accepted\n";
     else echo "Time Limit Exceeded\n";
 }





