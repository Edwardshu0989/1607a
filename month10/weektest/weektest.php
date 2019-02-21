<?php  
    function  flower($str)
    {
        $b=floor($str/100);
        $s=floor(($str-$b*100)/10);
        $g=$str-$b*100-$s*10;
        $sum=pow($b, 3)+pow($s, 3)+pow($g, 3);
        if ($sum==$str) 
        {
            echo "水仙花数";
        }
        echo "不是水仙花数";
    }
    //查询首次出现3次字母
    function serac($str)
    {
        $count=strlen($str);
        for($i=0;$i<$count;$i++)
        {
            $sr=ord($str[$i]);
            if ($sr>=65&&$sr<=122) 
            {
                $arr[]=$sr;
            }
            $aus=array_count_values($arr);
            foreach ($aus as $key => $value) 
            {
                if ($value==3) 
                {
                    echo $key;
                    exit();
                }
            }
        }
    }
    //回文字符串
    function huiwn($str)
    {
        $count=strlen($str);
        $k=0;
        for($i=$count-1;$i<$count;$i++)
        {
            if ($str[$i]!=$str[$k]) 
            {
                echo "字符串不是回文字符串";
            }
            $k++;
        }
         echo "字符串是回文字符串";
    }
    //斐波那契数列
    function fly($str)
    {
        for($i=1;$i<=$str;$i++)
        {
            if ($i==1) 
            {
                $a=0;
                $b=1;
            }
            else
            {
                $c=$a+$b;
                $a=$b;
                $b=$c;
            }
            $arr[]=$b;
        }
        return $arr;
    }
    //算法1->a,2->b
    function  fa($str)
    {
        $list=range('a', 'z');
        $count=count($list);
        $arr=[];
        while ($str) 
        {
            $tmp=floor($str/$count);
            $yu=$str%$count;
            if ($yu==0) 
            {
                $tmp--;
                array_unshift($arr, $list[$count-1]);
            }
            else
            {
                array_unshift($arr, $list[$yu-1]);
            }
            $str=$tmp;
        }
        return implode('', $arr);
    }
    //走台阶
    function tai($str)
    {
        
            if ($str==1) 
            {
                return 1;
            }
            else if($str==2)
            {
                return 2;
            }
            else
            {
                return tai($str-1)+tai($str-2);
            }
        
    }
    echo tai(2);