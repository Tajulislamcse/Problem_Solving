<?php
$str=trim(fgets(STDIN));
$main=str_replace(" ",'',$str);

/*
$raw=explode(" ",$str);
$main="";
for($i=0;$i<count($raw);$i++)
	$main.=$raw[$i];
//echo "$main";
*/
$v=0;
$c=0;

for($i=0;$i<strlen($main);$i++)
{
	if($main[$i]=='a'||$main[$i]=='e'||$main[$i]=='i'||$main[$i]=='o'||$main[$i]=='u')
		$v++;
	else
		$c++;
}
echo "vowel=$v\nconsonant=$c";
