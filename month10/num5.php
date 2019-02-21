<?php  
    function  caftn($str,$end)
    {
        // $aus=strval($str);
        // echo $aus[1];
        $arr=[];
            for($i=$str;$i<=$end;$i++)
            {
                 $aus=strval($i);
                 // echo $aus;
                 for($j=0;$j<strlen($aus);$j++)
                 {
                    if ($aus[$j]==1) 
                    {
                        // echo $aus;break;
                        $arr[]=$aus;
                        // break;
                    }
                 }
            }
            return count($arr);
    }
    echo '<pre>';
   echo (caftn(12,156));
   function ros($res)
   {
        for
   }