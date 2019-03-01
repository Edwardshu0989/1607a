<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/1
 * Time: 10:25
 */
function str($str)
{
    $len=strlen($str);
    if($len<0&&$len>10000)
    {
        return false;
    }
    $top=[];
    for($i=0;$i<$len;$i++)
    {
        $top[$i]=$str[$i];
    }
    $kes=array_count_values($top);
    arsort($kes);
    $keo=$kes;
    $ko=array_pop($keo);
    $ked=array_flip($kes);
    $po=array_pop($ked);
    if ($ko!=1)
    {
        return -1;
    }
    else
    {
        $kk=array_search($po,$top);
        echo $kk;
    }




}
str('aAbfsfsf');