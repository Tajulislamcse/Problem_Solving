  <?php
  $s=trim(fgets(STDIN));
  echo maxLengthBetweenEqualCharacters($s);
  function maxLengthBetweenEqualCharacters($s) 
    {
        $flag=0;
        $max=0;
        for($i=0;$i<strlen($s);$i++)
        {
            for($j=$i+1;$j<strlen($s);$j++)
            {
                
                if($s[$i]==$s[$j])
                {
                     if(($j-$i)-1>=$max)
                    {
                       //echo "$i $j\n";
                       $flag=1;
                        
                        $max=($j-$i)-1;
                    }
                    
                }
            }
       


        }
            if($flag==0)
            {
                return -1;
            
            }
            else
                return $max;
    }