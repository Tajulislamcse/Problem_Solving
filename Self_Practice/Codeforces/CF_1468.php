<?php
fscanf(STDIN,"%d",$tc);
while($tc--)
{
$arr=explode(' ',trim(fgets(STDIN)));
sort($arr);
echo min($arr[0],$arr[1])*min($arr[2],$arr[3])."\n";
}