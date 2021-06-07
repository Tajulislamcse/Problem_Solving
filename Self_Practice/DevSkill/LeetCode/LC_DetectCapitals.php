<?php
 

            fscanf(STDIN,"%s",$word);
            echo detectCapitals($word);
            function detectCapitals($word)
            {
                $count1=0;
                $count2=0;
                for($i=0;$i<strlen($word);$i++)
                {
                    if(ord($word[$i])>=65&&ord($word[$i])<=90)
                     {
                        $count1++;
                     }
                     
                     
                         if((ord($word[0])>=65&&ord($word[0])<=90)||(ord($word[$i])>=97&&ord($word[$i])<=122))
                       $count2++;
            
                     
                    
                }
                if(($count1==strlen($word))||($count2==strlen($word)))
                    return True;
                 
                else
                    return False;
            }
           