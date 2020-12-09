<?php
fscanf(STDIN,"%d %d",$n,$t);
fscanf(STDIN,"%s",$str);
while($t--)
{
	$i=0;
	while ($i<$n-1)
	 {
		if($str[$i]=='B'&&$str[$i+1]=='G')
		 {
              $str[$i]='G';
              $str[$i+1]='B';
              $i+=2;
              //echo "hi\n";
		 }
		 else
		 	$i++;
	 }
}
echo "$str";