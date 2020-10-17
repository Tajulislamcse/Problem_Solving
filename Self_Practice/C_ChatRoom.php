    <?php
    $str=trim(fgets(STDIN));
    $word="heidi";
    $cnt=0;
    for ($i=0; $i <strlen($str) ; $i++) 
       {
       	   if($word[$cnt]==$str[$i])
           {
               $cnt++;
               if($cnt==5)
                break;
            }   
     
       }
       echo $cnt==5?"YES":"NO";