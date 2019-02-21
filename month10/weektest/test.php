<?php  
    //水仙花
    function  flower($str)
    {
        $b=floor($str/100);
        $s=floor(($str-$b*100)/10);
        $g=$str-$b*100-$s*10;
        $sum=pow($b, 3)+pow($s, 3)+pow($g, 3);
        if ($sum==$str) 
        {
            return "该值是水仙花数";
        }
        return "该值bu是水仙花数";
    }
    //查询首次出现3次的字母
    function  sera($str)
    {
        $count=strlen($str);
        $arr=[];
        for($i=0;$i<$count;$i++)
        {
            $sr=ord($str[$i]);
         
            if ($sr>=65&&$sr<=122) 
            {
                $arr[]=$str[$i];
            }
            $aus=array_count_values($arr);
            foreach ($aus as $key => $value) 
            {
                if ($value==3) 
                {
                    echo $key;
                    exit;
                }
            }
        }
    }
    //判断一个字符串是否是回文字符串
    function   backstr($str)
    {
        $count=strlen($str);
        $k=0;
        for($i=$count-1;$i>0;$i--)
        {
            if ($str[$i]!=$str[$k]) 
            {
                echo "该字符串不是回文字符串";
                exit();
            }
            $k++;
        }
          echo "该字符串是回文字符串";
    }
    //斐波那契数列
    function  fly($str)
    {

        for($i=1;$i<=$str;$i++)
        {
            if ($i==1) 
            {
                $a=1;
                $b=0;
            }
            else
            {
                $c=$a+$b;
                $b=$a;
                $a=$c;
            }
            $arr[]=$a;
        }
        return $arr;
    }
    //算法1-》a,2->b
    function   lei($str)
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
    function jie($str)
    {
        if ($str==1) 
        {
            return 1;
        }
        else if($str==2)
        {
            return 2;
        }
        return jie($str-1)+jie($str-2);
    }
    echo jie(4);