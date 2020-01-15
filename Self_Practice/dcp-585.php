<?php
fscanf(STDIN,"%d\n",$t);
while($t--)
{
    $str=trim(fgets(STDIN));
    //echo $str;
    $bstr1="co";
    //$bstr2="coding";
    $cnt=0;
    for($i=0;$i<strlen($bstr1);$i++)
      {
      for($j=0;$j<strlen($str);$j++)
        {
         if($bstr1[$i]==$str[$j])
         {
          $cnt++;
           break;
           // echo $cnt;
          }
       // echo"taj "; 
      }
      //echo "tajul ";
      if($cnt==11)
      {
      echo"Yes\n";

         break;
      }
     else echo"No";
      
      }
      
    
    
}