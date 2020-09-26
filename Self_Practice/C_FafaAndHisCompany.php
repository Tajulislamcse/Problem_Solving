<?php
fscanf(STDIN,"%d",$n);
$count=0;
$divide=(int)($n/2);
$sub=1;
$i=1;
while ($divide--) {
$res=$n-($sub++);
if(($res)%($i++)==0)
$count++;
//echo "$res\n";
}
echo "$count";