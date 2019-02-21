<?php  
    function  chu($index)
    {
        $key=$index;
        while ($index) 
        {
            $num=floor($index/2);
            $res=$index%2;
            if ($num==1&&$res==0) 
            {
                echo $key."是丑数";
                exit;
            }
            else if($res==0)
            {
                $index=$num;
            }
            else
            {
                $aus=$index;
                break;
            }
        }
        while ($aus) 
        {
            $num=floor($aus/3);
            $res=$aus%3;
            if ($num==1&&$res==0) 
            {
                echo $key."是丑数";
                exit;
            }
            else if($res==0)
            {
                $aus=$num;
            }
            else
            {
                $ress=$aus;
                break;
            }
        }
        while ($ress) 
        {
            $num=floor($ress/5);
            $res=$ress%5;
            if ($num==1&&$res==0) 
            {
                echo $key."是丑数";
                exit;
            }
            else if($res==0)
            {
                $ress=$num;
            }
            else
            {
                echo $key."不是丑数";
                exit();
            }
        }
    }
    
      function sn( $n,  $m) {
        // 不合法输入的判断
        if($n == 0 || $m < 1) {
            return -1;
        }        
         $last = 0;
        for( $i = 2; $i <= $n; $i++) {
            $last = ($last + $m) % $i;
        }
        return $last;
    }


   echo sn(10,6);