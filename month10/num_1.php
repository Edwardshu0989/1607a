<?php
    function jou($res)
    {
        $list=range('a', 'z');
        $count=count($list);
        $arr=[];
        while ($res) 
        {
             $tmp=floor($res/$count);
             $rem=$res%$count;
             if ($rem==0) 
             {
                 $tmp--;
                 array_unshift($arr, $list[$count-1]);
             }
             else
             {
                array_unshift($arr, $list[$rem-1]);
             }
             $res=$tmp;
        }
        echo implode('', $arr);
    }
    echo jou(56);





