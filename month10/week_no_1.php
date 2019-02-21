<?php  
    //1+2+3+4....+100;
    function ac($str)
    {
        if ($str==1) 
        {
            return 1;
        }
        else
        {
            return ac($str-1)+$str;
        }
    }
    //阶乘
    function jc($str)
    {
        if ($str==1) 
        {
            return 1;
        }
        else
        {
            return jc($str-1)*$str;
        }
    }
    //回文
    function hw($str)
    {
        $hs=strlen($str);
        $k=0;
        for($i=$hs;$i>0;$i--)
        {
            if ($str[$i]!=$str[$k]) 
            {
                echo "该字符传不是回文字符串";
                exit;
            }
            $k++;
        }
        echo "该字符串是回文字符串";
    }
    //冒泡
    function po($arr)
    {
        $num=count($arr)
        for($i=0;$i<$num-1;$i++)
        {
            for($j=$i+1;$j<$num-$i;$j++)
            {
                if ($arr[$i]>$arr[$j]) 
                {
                    $tmp=$arr[$i];
                    $arr[$i]=$arr[$j];
                    $arr[$j]=$tmp;
                }
            }
        }
        return $arr;
    }
    //快排
    function ka($arr)
    {
        $left=[];
        $right=[];
        if (count($arr)<=1)
         {
            return $arr;
        }
        $mid=$arr[0];
        for($i=0;$i<count($arr);$i++)
        {
            if ($arr[$i]>$mid) 
            {
                $left[]=$arr[$i];
            }
            else
            {
                $right[]=$arr[$i];
            }
        }
        $left=ka($left);
        $right=ka($right);

        return array_merge($left,[$mid],$right);
    }
    //水仙花
    function flower($str)
    {
        $bai=floor($str/100);
        $shi=floor(($str-$bai*100)/10);
        $ge=$str-$bai*100-$shi*10;
        $sum=pow($bai, 3)+pow($shi, 3)+pow($ge, 3);
        if ($sum==$str) 
        {
            echo "该数字是水仙花数";
        }
        else
        {
            echo "该数字不是水仙花数";
        }
    }
    //数字-》字母
    function ask($arr)
    {
        $list=range('a', 'z');
        $sum=count($list);
        $arrk=[];
        while ($arr) 
        {
               $number=floor($arr/26);
              $tg=$count%26;
            if ($tg==0) 
            {
                $number--;
                array_unshift($arr, $list[$sum-1]);
            }
            else
            {
                array_unshift($arr, $list[$tg-1]);
            }
            $arr=$number;
        }
        return implode('', $arr);
    }
    //银行
    function brank($arr,$arrt)
    {
        $window=[];
        $user=[];
        $wait=0;
        for($i=0;$i<count($arr);$i++)
        {
            if ($window<4) 
            {
                $user[]=$arr[$i]+$arrt[$i];
                continue;
            }
            sort($user);
            $min_user=array_shift($user);
            if ($min_user>$arr[$i]) 
            {
                $wait=$wait+$min_user-$arr[$i];
                $now_user=$min_user+$arrt[$i];
            }
            else
            {
                $now_user=$arr[$i]+$arrt[$i];
            }
            $user[]=$now_user;
        }
       return $wait / count($arr);
    }
    //中间值
    function mid($arr)
    {
        $sum=0;
       for($i=0;$i<count($arr);$i++)
       {
         $sum=$sum+$arr[$i];
       }
       $sums=0
       for($i=1;$i<count($arr);$i++)
       {
            $sums=$sums+$arr[$i];
            if ($sums==($sum/2))
             {
                $s=$i+1;
                echo $s."就是中间值";
                exit;
            }
       }
       echo "没有中间值"
    }
    //斐波那契数列
    function fei($str)
    {
        if ($str==1||$str==2) 
        {
            return 1;
        }
        else
        {
            return fei($str-1)+fei($str-2);
        }
    }
