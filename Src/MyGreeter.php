<?php

namespace Src;
date_default_timezone_set('Asia/Shanghai');

class MyGreeter
{
    //定义一个方法，根据当前时间返回不同的问候语
    public function greeting($current_hour = null)
    {
        // 获取当前小时数
        $current_hour = $current_hour ?? date('G');

        // 判断当前时间属于哪个时间段，并返回相应的问候语
        if ($current_hour >= 6 && $current_hour < 12) {
            return "Good morning";
        } elseif ($current_hour >= 12 && $current_hour < 18) {
            return "Good afternoon";
        } else {
            return "Good evening";
        }
    }
}

// 创建一个实例并测试
//$greeter = new MyGreeter();
//echo $greeter->greeting() . PHP_EOL;
