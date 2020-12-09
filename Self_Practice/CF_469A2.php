<?php
    fscanf(STDIN, "%d", $n);
    $arr1 = explode(" ", trim(fgets(STDIN)));
    $arr2 = explode(" ", trim(fgets(STDIN)));
    $v = array();
        for ($i = 1; $i < count($arr1); $i++){
            
                $v[$arr1[$i]] = 1;
          
        }
         for ($i = 1; $i < count($arr2); $i++){
           
             $v[$arr2[$i]] = 1;
           
        }
       // print_r($v);
        
        if (count($v) >= $n){
            echo 'I become the guy.';
        }
        else echo 'Oh, my keyboard!';