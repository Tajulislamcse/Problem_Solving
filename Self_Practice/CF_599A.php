<?php
fscanf(STDIN,"%s %s %s",$d1,$d2,$d3);
echo min(bcmul(2,bcadd($d1,$d2)),bcadd($d3,bcadd($d1,$d2)),bcmul(2,bcadd($d1,$d3)),bcmul(2,bcadd($d2,$d3)));