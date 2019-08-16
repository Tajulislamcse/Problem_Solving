<?php
fscanf(STDIN,"%d\n",$tc);
while($tc--){
$input=trim(fgets(STDIN));
$m=explode(" ",$input);
$ans=($m[0]*10)+($m[1]*50)+($m[2]*100);
echo $ans."\n";

}