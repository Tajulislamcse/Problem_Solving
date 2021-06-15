<?php
fscanf(STDIN,"%s",$s);
echo lengthOfLastWord($s);
    function lengthOfLastWord($s)
    {
        if(strlen(trim($s))==0)
            return 0;
        else
        {
            $newStr=explode(" ",trim($s));
            return strlen($newStr[count($newStr)-1]);

        }
    }    