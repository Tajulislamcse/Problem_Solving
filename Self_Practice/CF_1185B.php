<?php
fscanf(STDIN,"%d",$n);
//$pair=$n*2;
while ($n--)
{
	$typed=trim(fgets(STDIN));
	//$typedSplit=str_split($typed);
	
	$printed=trim(fgets(STDIN));
	//$printedSplit=str_split($printed,2);
	//print_r($printedSplit);
	$tLength=strlen($typed);
	$pLength=strlen($printed);

	$same=false;

    $tlstchar=$tLength-1;
    $plstchar=$pLength-1;
     $count=0;
	if ($pLength>=$tLength&&$typed[0]==$printed[0]&&$typed[$tlstchar]==$printed[$plstchar])
	 {
	     
	      for ($i=0; $i <$pLength ; $i++) 
	      { 
	      	if($printed[$i]==$typed[$count])
	      	 {
	      		$count++;

	      		if($count==$tLength)
	      		{
	      			$same=true;
	      			break;
	      		}
	      	 }
	      	 //echo "$count\n";


	      }

     }
   echo $same?"YES\n":"NO\n";
}