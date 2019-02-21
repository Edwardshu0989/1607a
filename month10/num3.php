<?php  
    function   flower($str)
    {
        $bai=floor($str/100);
        $si=floor(($str-$bai*100)/10); 
        $ge=$str-$bai*100-$si*10;
        $sum=pow($bai, 3)+pow($ge, 3)+pow($si, 3);
        if ($sum==$str) 
        {
            echo "true";
        }
        echo "false";
    }
    flower(123);