<?php
fscanf(STDIN,"%d",$t);
while($t--)
{	    
        fscanf(STDIN,"%d",$n);
        $arr=explode(' ',trim(fgets(STDIN)));
		//$cnt=0;
		//$newArr=array();
		$pos=array();
		for ($i=0,$j=0; $i <$n; $i++)
		{ 
			if($arr[$i]==1)
				{
					$pos[$j]=$i;
					//$newArr[$j]=$arr[$i];
					$j++;
				}
			
		}
		//print_r($pos);
		if(count($pos)==1)
			echo "0\n";
		else
		    {   $cnt=0;
		    	$firstPos=$pos[0];
		    	$lstindx=count($pos)-1;
		    	$lstPos=$pos[$lstindx];
		    	for ($i=$firstPos;$i <=$lstPos ; $i++)
		    	{ 
		    		if($arr[$i]==0)
		    			$cnt++;
		    	}
		    	echo "$cnt\n";

		    }

		       
}