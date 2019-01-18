<?php
/**
 * Created by PhpStorm.
 * User: celing
 * Date: 2018/12/21
 * Time: 21:01
 */
$handle = fopen("3.8.html", "r");
//fopen()打开失败？？php.ini中已经设置。

/*通过 include 或 require 语句，可以将 PHP 文件的内容插入另一个 PHP 文件（在服务器执行它之前）。
include 和 require 语句是相同的，除了错误处理方面：
require 会生成致命错误（E_COMPILE_ERROR）并停止脚本
include 只生成警告（E_WARNING），并且脚本会继续
echo "include实例"."<br>";
include '3.8.html';
echo "<hr>";*/

?>