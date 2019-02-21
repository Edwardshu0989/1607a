<?php  

    //num1 第一种方法
    function  cum1()
    {
         $sum=0;
        for($i=1;$i<=100;$i++)
        {
            $sum=$sum+$i;
        }
        return $sum;
    }
    //num1 第2种方法
    function  cum2()
    {
         $sum=(1+100)*(100/2);
        return $sum;
    }
     //num1 第3种方法
    function  cum3()
    {
         $sum=100*1+100*(100-1)/2;
        return $sum;
    }
    //num2 递归实现
    function recur1($a)
    {
        if ($a>2) 
        {
            return $a*(recur1($a-1));
        }
        else
        {
           return $c=$a*($a-1);
        }
        
    }
    //num2 循环实现
    function recur2($a)
    {
        $sum=1;
         for($i=1;$i<=$a;$i++)
        {
            $sum=$sum*$i;
        }
        return $sum;
    }
    //num3 判断是否是回字符串
    function eng($str)
    {
        $sum= strlen($str);
        $newstr='';
           for($i=$sum;$i>0;$i--)
        {
            $newstr.=substr($str, $i-1,1);
        }
        if ($newstr==$str) 
        {
            return "该字符是回文字符串";
        }
        else
        {
            return "该字符不不是回文字符串";
        }
    }
    //num4 封装类
    /**
    * 
    */
    class Person
    {
        
        public  $name='';
        public   $age='';
        function __construct($uname,$uage)
        {
            $this->name=$uname;
            $this->age=$uage;
        }
    }
    /**
    * 
    */
    class Walk
    {

    }
    /**
    * 
    */
    class Student extends Person
    {
    
    }
    /**
    * 
    */
    // class Student extends Walk
    // {
        
        
    // }
    function rus()
    {
    
     $a1=new Student('小明',8);
        $a=$a1->age;
        $b1=new Student('小黑',9);$b=$b1->age;
        $c1=new Student('小红',7);$c=$c1->age;
        $d1=new Student('小蓝',6);$d=$d1->age;
        $e1=new Student('小橙',5);$e=$e1->age;
        $f1=new Student('小龙',10);$f=$f1->age;
        $g1=new Student('小白',4);$g=$g1->age;
        $h1=new Student('小紫',3);$h=$h1->age;
        return  max($a,$b,$c,$d,$e,$f,$g,$h);
    }
    function resure($str)
    {
        $k=0;
        for($i=strlen($str)-1;$i>=0;$i--)
        {
            if ($str[$i]!=$str[$k]) 
            {
                echo "该字符不不是回文字符串";
                break;
            }
            $k++;
        }
        echo "该字符是回文字符串";
    }
    resure("hlh");
