<?php
fscanf(STDIN,"%d",$testcases);
while($testcases--)
{
fscanf(STDIN,"%s",$str);
if($str=="Quill")
echo"I am going to ask you this one time, where is Gamora?\n";
else if ($str=="Stark")
 {
 echo "I will do you one better, who is Gamora?\n";
}
else if($str=="Drax")
{
    echo "I will do you one better, why is Gamora?\n";
}
else
 echo "What is Gamora?\n";
}
//echo $str."\n";

