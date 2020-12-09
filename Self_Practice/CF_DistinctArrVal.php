<?php
$ara="abefdfggshi";
$v=array();
for ($i=0; $i <strlen($ara); $i++)
 { 
	$v[$ara[$i]]=1;
 }
 foreach ($v as $key=>$value) 
 {
 	echo $key;
 }