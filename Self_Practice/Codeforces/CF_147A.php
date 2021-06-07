<?php
$s=trim(fgets(STDIN));
$s=preg_replace("/( )+/",' ',$s);

$s=str_replace(' ,',',',$s);
$s=str_replace(', ',',',$s);
$s=str_replace(',',', ',$s);

$s=str_replace(' .','.',$s);
$s=str_replace('. ','.',$s);
$s=str_replace('.','. ', $s);

$s=str_replace(' !','!',$s);
$s=str_replace('! ','!',$s);
$s=str_replace('!','! ', $s);

$s=str_replace(' ?','?',$s);
$s=str_replace('? ','?',$s);
$s=str_replace('?','? ', $s);


echo $s;
   