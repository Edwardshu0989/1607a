<?php  
    function search($str)
    {
        $arr=[];
        for($i=0;$i<strlen($str);$i++)
        {   
            $arr[$i]=$str[$i];
            $ak=array_count_values($arr);
            foreach ($ak as $key => $value) 
            {
                if ($value==3) 
                {

                   if (ord($key)>=65 && ord($key)<=122)//判断其阿斯卡码是否在英文字母所在范围
                    {
                       echo $key;
                       exit();
                   }
                   
                }
            }
           
        }
    }
    // search("Have you ever gone shopping and");
    function quick($arr)
    {
        
        $a1=[];
        $a2=[];
        if (count($arr)<=1) 
        {
          return $arr;
        }
         $mid=$arr[0]; //1
        for($i=1;$i<count($arr);$i++)
        {
            if ($arr[$i]<$mid) 
            {
                $a1[]=$arr[$i];
            }
            else
            {
                $a2[]=$arr[$i];
            }
        }
      
        $a1=quick($a1);//[0]
        $a2=quick($a2);//
       echo "0";
        return array_merge($a1,[$mid],$a2);
    }
   print_r(quick([1,2,3,000]));
   function   mid($arr)
   {
        for($i=1;$i<count($arr);$i++)
        {
            $sum=0;
            $fonsum=0;
            for($c=0;$c<$i;$c++)
            {
                $fonsum=$fonsum+$arr[$c];
            }
            for($b=$i+1;$b<count($arr);$b++)
            {
                $sum=$sum+$arr[$b];
            }
            if ($fonsum==$sum) 
            {
                echo $i;
                exit();
            }
        }
   }
  