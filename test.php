<?php  
    //1．编写一个程序，传入n与m两个参数，生成1~n的编号，从开头的编号开始数，数到m将对应的元素删除，接下来从下一个元素开始数，数到m就删除，求最后剩下的数字
    function  shan($n,$m)
    {
        $list=range(1, $n);
        $i=0;
        $k=0;
        while (count($list)>1) 
        {
            if(!isset($list[$i]))
            {
                $list=$arr;
                $i=0;
                continue;
            }
            $k++;
            if ($k==$m) 
            {
                unset($list[$i]);
                $k=0;
            }
            else
            {
                $arr[]=$list[$i];
            }
        }
        return $list;
    }
    //2．编写一个程序，给定任意长度的数组，数组内包含n个数字，要求将数组分为三组，每组的和尽量相近：
    function jin($arr)
    {
        sort($arr);
        $res=count($arr);
        $att=[
            [$arr[$res-1]],
            [$arr[$res-2]],
            [$arr[$res-3]]
            ];
        for($i=0;$i<$res-3;$i++)
        {
            array_unshift($att[2], $arr[$i]);
            $sum=array_sum($att[2]);
            if ($sum>array_sum($att[0])) 
            {
                $att=[
                  $att[2],
                  $att[0],
                  $att[1],
                    ];
            }
            elseif ($sum>array_sum($att[1])) 
            {
               $att=[
                  $att[0],
                  $att[2],
                  $att[1],
                    ];
            }
        }
        return $att;
    }
    // 3．编写一个函数，传入一个数组，数组内包含n个正整数数字，返回数组内数字可以组成的最大值：
    function  mmax($arr,$pow=0)
    {
        static $return=[];
        for($i=0;$i<10;$i++)
        {
            $t[]=[];
        }
        $tt=[];
        for($k=0;$k<count($arr);$k++)
        {
            $index=(string)$arr[$k];
            if (isset($index[$pow])) 
            {
                $t[$index[$pow]][]=$arr[$k];
            }
            else
            {
                $tt[$index[$pow-1]][]=$arr[$k];
               
            }
        }
         
        for($j=0;$j<10;$j++)
        {
            if (!isset($t[$j][0])) 
            {
                unset($t[$j]);
            }
            elseif (count($t[$j])==1) 
            {
                array_unshift($return, $t[$j][0]);
            }
            elseif(isset($tt[$j]))
            {
                // print_r($tt);
                array_merge($tt[$j],$return);
            }
            else
            {
                mmax($t[$j],$pow+1);
            }
            
        }
        return $return;
    }
    // echo '<pre>';
    // print_r(mmax([23,2,2,21,4,45,65]));
    // 4．银行有四个柜台，给定两个数组包含客户到达银行的时间与办理业务所需要的时间：
    function window($arr,$att)
    {
        $window=[];
        $wait=0;
        for($i=0;$i<count($arr);$i++)
        {
            if (count($window)<4) 
            {
                $window[]=$arr[$i]+$att[$i];
                continue;
            }
            sort($window);
            $num=array_shift($window);
            if ($num>$arr[$i]) 
            {
                $wait+=$num-$arr[$i];
                $window[]=$num+$att[$i];
            }
            else
            {
                $window[]=$arr[$i]+$att[$i];
            }
        }
        return $wait/count($arr);
    }
    // 5．编写一个单例模式的PDO数据库操作类，传入sql执行返回合适的结果即可：
    class ppdo
    {
        private static $class;
        public $arr=[];
        public $dsb='';
        private function __construct()
        {
            $dsn = 'mysql:dbname=exam_2;host=127.0.0.1';
            $user = 'root';
            $password = 'root';
            $this->dsb = new PDO($dsn, $user, $password);
            // echo 2;
            
        }
        public function create()
        {
            if (isset($arr)) 
            {
                return 'true';
            }
            else
            {
                return 'false';
            }
        }
        public function  select($sql)
        {
            $res=$this->dsb->query($sql);
            return $res->fetchAll(PDO::FETCH_ASSOC);
        }
        public function find($sql)
        {
            $res=$this->dsb->query($sql);
            return $res->fetch(PDO::FETCH_ASSOC);
        }
        public function delete($sql)
        {
            return $res=$this->dsb->exec($sql);
        }
        public function update($sql)
        {
            return $res=$this->dsb->exec($sql);
        }
        private function __clone()
        {
            echo 1;
        }
        public static function long()
        {
            if (self::$class instanceof self) 
            {
                return self::$class;
            }
            return self::$class=new SELF();
        }
    }
    $a=ppdo::long();
    $sql3="delete from exam_user where uid=2";
    $sql4="update exam_user set user='小飞'   where uid=3";
    echo $a->update($sql4);
    // $sql2="select * from exam_user where uid =1";
    // $sql="select * from exam_user where uid in (1,2,3,4)";
    // print_r($a->select($sql));
    // print_r($a->find($sql));