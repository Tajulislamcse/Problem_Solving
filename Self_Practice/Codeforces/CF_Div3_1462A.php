<?php
fscanf(STDIN,"%d",$tc);
while($tc--)
{
fscanf(STDIN,"%d",$n);
$arra=explode(' ',trim(fgets(STDIN)));
$s=0;
$end=count($arra)-1;
while($s<$end)
{
	fprintf(STDOUT,"%d %d",$arra[$s],$arra[$end]);
	$s++;
	$end--;
}

}