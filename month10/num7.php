<?php  
    function zu($arr)
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
            if ($mid>$arr[$i]) 
            {
                $left[]=$arr[$i];
            }
            else
            {
                 $right[]=$arr[$i];
            }
        }
        $left=zu($left);
        $right=zu($right);
        return array_merge($left,[$mid],$right);
    }
        function kue()
        {
            $arr=array();
            return $arr;
        }
    function ku($arr)
    {
        $arr=zu($arr);
        $sum=0;
        $sug=0;
        $count=count($arr);
        for($i=0;$i<count($arr);$i++)
        {
            $sum=$sum+$arr[$i];
        }
        $ave=$sum/3;
        // if($arr[$count-1]>$ave)
        // {
        //     // echo $arr[$count-1];die;
        //     $tms[]=array($arr[$count-1]);
        //     // print_r($tms);die;
        // }
        $po=0;
        $kl=0;
        $jl=0;
        $tms=array();
        for($j=0;$j<count($arr);$j++)
        {
            if ($arr[$count-1-$j]>$ave) 
            {
                $tms[]=array($arr[$count-1-$j]);
                 
                    # code...
                // print_r($tms);die;
                // echo count($tms);die;
                $sum=$sum-$arr[$count-1-$j];
                $ave=$sum/2;
                $fei=1;
                if ($arr[$count-2]>=$ave) 
                {
                    $kl=1;
                    $tms[]=array($arr[$count-2]);
                }
                continue;
            }
            if (count($tms)==2) 
            {
                    if ($kl==1) 
                    {
                        $j=0;
                    }
                     for($k=$j;$k<count($arr)-2;$k++)
                     {
                        $aux[]=$arr[$k];
                     }
                     $tms[]=$aux;
                     print_r($tms);die;
                     return $tms;
            }
            $po++;
            
            if ($po==1)
            {
                $j=0;
                $que=array();
                if (isset($fei)) 
                {
                    $jl=1;
                }
                 array_unshift($que, $arr[$j],$arr[$count-1-$jl]);
                 //
                 // print_r($que);die;
                $resss=array_sum($que);
            }
            elseif(is_array($que)&&count($que)==0)
            {
                 array_unshift($que, $arr[$j],$arr[$count-1-$j]);
                $resss=array_sum($que);
            }
            else
            {
                 array_unshift($que, $arr[$j]);
                  $resss=array_sum($que);
            }
            echo $ave;
             if ($resss>=$ave) 
                {
                    $tms[]=$que;
                    $sum=$sum-$resss;
                    $ave=$sum/2;
                    $que=kue();
                }
        }
    }
    echo '<pre>';
    print_r(ku([1,2,3,5,8,7,3,6,6,3,2,4,1,8,6,7,4]));
