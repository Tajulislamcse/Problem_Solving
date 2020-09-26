<?php
fscanf(STDIN,"%d",$tc);
while ($tc--) {
	# code...

$str=trim(fgets(STDIN));
$str1="";
$length=strlen($str);
for($i=1;$i<=$length-2;$i+=2)
{
	$str1.=$str[$i];
      
}
echo $str[0]."$str1".$str[$length-1]."\n";

}