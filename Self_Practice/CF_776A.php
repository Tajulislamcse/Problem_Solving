<?php
$kill=array();
$replace=array();
fscanf(STDIN,"%s %s",$kill[0],$replace[0]);	# code...

fscanf(STDIN,"%d",$day);

for ($i=1; $i <=$day ; $i++)
{ 
        fscanf(STDIN,"%s %s",$kill[$i],$replace[$i]);	# code...
}
echo "$kill[0] $replace[0]\n";
$newKill=$kill[0];
$newRep=$replace[0];

for ($i=1; $i <= $day ; $i++)
{
   //echo $i." ".$kill[$i].' '.$newKill." before if ".$kill[$i].' '.$newRep."\n";

  if ($kill[$i]==$newKill)
   {
   	$newKill=$replace[$i];
   	//$newRep=$replace[$i-1];
      echo $newKill." ".$newRep."\n";

   }
   else
   {
    	$newRep=$replace[$i];
    	//$newKill=$newKill;
      echo $newKill." ".$newRep."\n";

    }
  
   

}
/*
echo "All input shown\n";
//var_dump($initial);
echo "day=$day\n";
echo "kill\n";
var_dump($kill);
echo "replace\n";
var_dump($replace);
*/
