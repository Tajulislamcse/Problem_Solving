<?php
fscanf(STDIN,"%d %d",$n,$m);
$s=trim(fgets(STDIN));
$t=trim(fgets(STDIN));
$decision=false;
if($n<=$m+1)
{

	if($s[$n-1]=='*'&&strlen($s)>1)
	{
		$str1=str_replace('*','',$s);
        //print_r($str2);
        $count1=0;
        for ($i=0; $i <strlen($str1) ; $i++)
        { 
            if($str1[$i]==$t[$i])
                $count1++;

        }
        if($count1==strlen($str1))
            $decision=true;
        

	
	}
  elseif($s[0]=='*'&&strlen($s)>1)
    {
        $str1=str_replace('*','',$s);
        
        $count2=0;
        $j=strlen($t)-1;

        for ($i=0; $i <strlen($str1) ; $i++)
        { 
            if($str1[$i]==$t[$j])
            {
                $j--;
                $count2++;
            }
        }
        if($count2==strlen($str1))
            $decision=true;
     }   

	elseif (substr_count($s,'*')==0)
    {
        if($s==$t)
            $decision=true;
    }
    elseif ($s=='*')
     {
        $decision=true;
     }
			//$decision=true;

	else
	{
        //echo "hi\n";
		$str2=explode('*',$s);
		$first=$str2[0];
		$second=$str2[1];

		//print_r($str2);
		$count1=0;
		for ($i=0; $i <strlen($first) ; $i++)
		{ 
			if($first[$i]==$t[$i])
				$count1++;

		}
		$count2=0;
		$j=strlen($t)-1;
		for ($i=strlen($second)-1; $i>=0; $i--)
		{ 
			if($second[$i]==$t[$j])
			{
				$j--;
				$count2++;
			}

		}
	     if($count1==strlen($first)&&$count2==strlen($second))
		    $decision=true;

	}

}
echo $decision?"YES":"NO";