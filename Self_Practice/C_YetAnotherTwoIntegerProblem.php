<?php
fscanf(STDIN,"%s",$tc);
while($tc--)
{
 fscanf(STDIN,"%s %s",$a,$b);
if($a>$b)
{
	$big=$a;
	$sm=$b;
}
    
else
{
	$big=$b;
	$sm=$a;
}
//echo "$big\n$sm\n";
$count=0;
while ($big>$sm)
 {
	 $big=$big-10;
	 $count++;
	// echo "hi";
}
fprintf(STDOUT,"%d\n",$count);

}