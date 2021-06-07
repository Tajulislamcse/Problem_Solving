<?php
fscanf(STDIN,"%d",$n);
fscanf(STDIN,"%s",$line1);
fscanf(STDIN,"%s",$line2);
$count=0;

for ($i=0; $i <$n ; $i++) 
{

	if(abs($line1[$i]-$line2[$i])>4)
	{
		if($line1[$i]>$line2[$i])
		{
			$line=$line1[$i]+$line2[$i];
			$line2[$i]=$line-$line2[$i];
			$line1[$i]=$line-$line2[$i];

		}
      $count+=$line1[$i]+10-$line2[$i];

     // echo "$count\n";
  
	}
	else
    {
    	      $count+=abs($line1[$i]-$line2[$i]);
                    //echo "$count\n";

    }
}
echo "$count";