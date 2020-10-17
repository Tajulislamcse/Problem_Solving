<?php
fscanf(STDIN,"%d\n",$tc);
while ($tc--) 
{
   $password=trim(fgets(STDIN));
   $hash=trim(fgets(STDIN));
   $lenP=strlen($password);
   $lenH=strlen($hash);
   if($lenP>$lenH)
   	echo "NO\n";
   elseif ($lenP==$lenH)
    {
      //echo CharOccurOfStrP($password,$lenP)."\n";
      //echo CharOccurOfStrH($hash,$lenH)."\n";
    	if(CharOccurOfStrP($password)==CharOccurOfStrH($hash))
    		echo "YES\n";
    	else
    		echo "NO\n";

   	  
    }
    else
    {
    	$flag=0;
    	
    	for ($i=0; $i <$lenH ; $i++)
    	{

          $newStr=substr($hash,$i,$lenP);
          
          if(CharOccurOfStrH($newStr)==CharOccurOfStrP($password))
          {
          	$flag=1;
          	echo "YES\n";
          	break;
          }
  
         }
         if($flag==0)
         	echo "NO\n";
   }
    
}
function CharOccurOfStrP($password)
    {
    	$str="";
    	$alphabet="abcdefghijklmnopqrstuvwxyz";
      for ($i=0; $i <strlen($alphabet) ; $i++)
        { 
        	$cnt=0;
           for ($j=0; $j <strlen($password) ; $j++)
            { 
                if($alphabet[$i]==$password[$j])
                	$cnt++;

            }
            $str.=$alphabet[$i].$cnt; 
      	
        }
        return $str;
     
    }
function CharOccurOfStrH($hash)
    {
    	$str="";
    	$alphabet="abcdefghijklmnopqrstuvwxyz";
      for ($i=0; $i <strlen($alphabet) ; $i++)
        { 
        	$cnt=0;
           for ($j=0; $j <strlen($hash) ; $j++)
            { 
                if($alphabet[$i]==$hash[$j])
                	$cnt++;

            }
            $str.=$alphabet[$i].$cnt; 
      	
        }
        return $str;
     
    }    