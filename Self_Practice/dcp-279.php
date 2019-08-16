<?php
fscanf(STDIN,"%d\n",$tc);
while($tc--){

    fscanf(STDIN,"%s",$str);
      $cnt=0;

    for($i=0;$i<strlen($str);$i++)
    {
      //$cnt=0;
    
        if($str[$i]=="r")
        {
          $cnt++;
          break;
        } 
     }
    if($cnt==0)
    echo "Vely easy\n";
    else echo "Not vely easy\n";

       
}  