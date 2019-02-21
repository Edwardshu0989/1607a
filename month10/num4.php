<?php  
    //斐波那契数列
    function fei($str)
    {

        if ($str==1||$str==2) 
        {
            return 1;
        }
        else
        {
            $res= fei($str-1)+fei($str-2);
            return $res;
        }
    }
    function juse($str)
    {
       if ($str==1) 
       {
           return 1;
       }
        for($i=1;$i<$str;$i++)
        {
            if ($i==1) 
            {
                $a=1;
                $b=0;
            }
            $c=$a+$b;
            $b=$a;
            $a=$c;
        }
        return $c;
    }
    echo juse(6);