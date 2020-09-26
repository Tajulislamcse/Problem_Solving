<?php
$str=strtolower(trim(fgets(STDIN)));
//$vowel="";
$cons="";
for ($i=0; $i <strlen($str); $i++) 
{ 
	# code...

	if($str[$i]=='a'||$str[$i]=='e'||$str[$i]=='i'||$str[$i]=='o'||$str[$i]=='u'||$str[$i]=='y'||$str[$i]=='A'||$str[$i]=='E'||$str[$i]=='I'||$str[$i]=='O'||$str[$i]=='U'||$str[$i]=='Y')
		//$vowel.=$str[$i];
	//echo "vowel";
		continue;
	else
		$cons.=".$str[$i]";


	//echo "cons";
}

	# code
   echo "$cons";
	//echo strlen($cons);
