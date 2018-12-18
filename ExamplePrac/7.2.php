<?php
/**
 * Created by PhpStorm.
 * User: celing
 * Date: 2018/12/18
 * Time: 21:47
 */
//date()函数
date_default_timezone_set('PRC');
echo date("l")."<br>";
echo date("Y-m-d")."<br>";
echo date("l dS \of F Y g:i:s a")."<br>";
//这里获取的本地时间时区错误，为格林威治时间，需修改php.ini文件（法一）
//法二：在页头使用date_default_timezone_set()设置我的默认时区为北京时间
echo "<hr>";
//getdate()函数
$today = getdate();
print_r($today);
echo "<br>";
$anotherday = getdate(mktime(0,0,0,7,8,2017));
//指定时间戳用mktime()
print_r($anotherday);
?>