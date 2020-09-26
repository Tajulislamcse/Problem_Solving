<?php
fscanf(STDIN,"%d\n",$t);
for($count=1;$count<=$t;$count++)
{
	fscanf(STDIN,"%d\n",$number);
	for($i=0;$i<$number*2;$i++)
	{
		$line=trim(fgets(STDIN));
		$singleValue[$i]=explode(',', $line);
	}
	//print_r($singleValue);
	$index=0;
	$index2=0;
	for($i=$number;$i<$number*2;$i++)
	{
		
            if($singleValue[$i][1]=='Success')
            	$success[$index++]=$singleValue[$i][0];
            else
            	$failed[$index2++]=$singleValue[$i][0];
         
		
	}
	fprintf(STDOUT,"Case: %d\n",$count);
	echo "Success list\n";

	for($i=0;$i<count($success);$i++)
	{    $cnt=0;
		for($j=0;$j<$number;$j++)
		{   $replace=substr_replace($singleValue[$j][0],'****',3,4);
	        //echo $replace."\n";

			
			if($success[$i]==$replace)
			{
				$cnt++;
				$store=$j;
			 
			}
		}
		if($cnt==1)
				echo "$success[$i] : ".$singleValue[$store][0]."\n";
			else
				echo "$success[$i] : ".'Confused'."\n";
	}
	
	echo "Failed list\n";

   	for($i=0;$i<count($failed);$i++)
	{   $cnt=0;
		for($j=0;$j<$number;$j++)
		{   $replace=substr_replace($singleValue[$j][0],'****',3,4);
	        //echo $replace."\n";

			
			if($failed[$i]==$replace)
			{
				//echo "hi";
			$cnt++;
			$store=$j; 
			}
		
		}
		if($cnt==1)
				echo "$failed[$i] : ".$singleValue[$store][0]."\n";
			else
				echo "$failed[$i] : "."Confused"."\n";
			
	}
	}

	/*
	$index3=0;
	for($i=0;$i<count($failed);$i++)
	{
		for($j=0;$j<count($success);$j++)
		{
			if($failed[$i]==$success[$j])
			{
				$confused[$index3++]=$failed[$i];
				break;
			}
		}
	}

	fprintf(STDOUT,"Case %d:\n",$count);
	for($i=0;$i<$number;$i++)
	{
		for($j=0;$j<count($success);$j++)
		{
			if()
		}
	}

	*/

	//echo "confused";
	//print_r($confused);
