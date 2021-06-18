<?php
$s=readline();
$arr=explode(' ',$s);
$new=[];
$k=0;
$pattern="/[1-9]/";
for($i=1;$i<=count($arr);$i++)
{
    for($j=0;$j<count($arr);$j++)
    {
        $lastChar=strlen($arr[$j]);
        if($arr[$j][$lastChar-1]==$i)
            $new[$k++]=preg_replace($pattern,'',$arr[$j])." ";
        
    }
    
}
echo rtrim(implode($new));