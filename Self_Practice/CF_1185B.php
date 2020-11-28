<?php
fscanf(STDIN,"%d",$n);
while ($n--)
{
	$typed=trim(fgets(STDIN));
    $printed=trim(fgets(STDIN));
  
	          $grp1=identicalSubstring($typed);
              $grp2=identicalSubstring($printed);
                     if(count($grp1)!=count($grp2))
                        {
                           $same=false;
                        }  
                     else
                     {
                            $same=true;
                             for ($i=0; $i <count($grp1) ; $i++)
                            { 
                                    if((strlen($grp1[$i])>strlen($grp2[$i]))||($grp1[$i][0]!=$grp2[$i][0]))
                                    {
                                        $same=false;
                                        break;
                                    }
                                  
                            }
                     }    

                
        

  echo $same?"YES\n":"NO\n";
}
function identicalSubstring($str)
{
                $grp1=array();
                if(count(array_unique(str_split($str)))==1)
                  {
                    $grp1[0]=$str;
                    return $grp1;
                  }
                else
                 {
                        $i=0;
                        $k=0;
                        $str2="";
                        while($i<strlen($str)-1)
                        {

                                    if($str[$i]!=$str[$i+1])
                                    {  
                                        $last=$i+1;
                                        $grp1[$k]=$str2.$str[$i];
                                        $k++;
                                        $str2="";
                                    }
                                    else
                                        $str2.=$str[$i];
                                 $i++;

                        }
                        $grp1[count($grp1)]=substr($str,$last);
                        return $grp1;

                    }    

}

