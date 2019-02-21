<?php  
    function  zzu()
    {
        $left=[];
        $right=[];
        if (count($arr)<=1) 
        {
            return $arr;
        }
        $mid=$arr[0];
        for($i=1;$i<count($arr);$i++)
        {
            if ($arr[$i]>$mid) 
            {
                $right=$arr[$i];
            }
            else
            {
                $left=$arr[$i];
            }
        }
        $left=zzu($left);
        $right=zzu($right);
        return array_merge($left,[$mid],$right);
    }