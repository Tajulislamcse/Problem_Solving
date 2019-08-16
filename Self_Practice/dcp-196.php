<?php
fscanf(STDIN,"%d\n",$testcases);
while($testcases--)
{   $input=trim(fgets(STDIN));
    $m=explode(" ",$input);
    $u=$m[0];
    $t=$m[1];
    $a=(-$u/$t);
    echo sprintf('%0.2f',$a)."\n";

}
