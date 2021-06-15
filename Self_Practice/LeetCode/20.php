<?php
$s=trim(fgets(STDIN));
$stack=array();
for ($i=0; $i <strlen($s) ; $i++) 
{
   if($s[$i]=='('||$s[$i]=='{'||$s[$i]=='[')
      array_push($stack,$s[$i]);
    else
      {
      	$last=end($stack);
      	if($last.$s[$i]=='()'||$last.$s[$i]=='{}'||$last.$s[$i]=='[]')
      		array_pop($stack);
      	else
      		array_push($stack,$s[$i]);

      } 
}
if(count($stack)==0)
	return true;
else
	return false;
