<?php
fscanf(STDIN,"%d\n",$tc);
while($tc--){
fscanf(STDIN,"%d\n",$number);
echo $rslt=pow(((1+sqrt(5))/2),$number)+pow(((1-sqrt(5))/2),$number)."\n";
}