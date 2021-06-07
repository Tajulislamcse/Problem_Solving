<?php
fscanf(STDIN,"%d",$tc);
while($tc--)
{
fscanf(STDIN,"%d",$n);
fscanf(STDIN,"%s",$str);
 if($str[0]=='2'&&$str[1]=='0'&&$str[2]=='2'&&$str[3]=='0')
     echo "YES\n";
 elseif($str[0]=='2'&&$str[strlen($str)-3]=='0'&&$str[strlen($str)-2]=='2'&&$str[strlen($str)-1]=='0')
     echo "YES\n";
elseif($str[strlen($str)-4]=='2'&&$str[strlen($str)-3]=='0'&&$str[strlen($str)-2]=='2'&&$str[strlen($str)-1]=='0')
     echo "YES\n";

elseif($str[0]=='2'&&$str[1]=='0'&&$str[strlen($str)-2]=='2'&&$str[strlen($str)-1]=='0')
     echo "YES\n";
 elseif($str[0]=='2'&&$str[1]=='0'&&$str[2]=='2'&&$str[strlen($str)-1]=='0')
     echo "YES\n";
 else
 	echo "NO\n";
}