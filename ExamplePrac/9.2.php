<?php
/**
 * Created by PhpStorm.
 * User: celing
 * Date: 2019/1/2
 * Time: 23:43
 */$link = mysqli_connect("localhost","root","2016212888");
 if (!@$link) {
     echo "连接失败！ <br>";
    die();
 }
 echo "连接成功！<br>";
 @mysqli_select_db("test",$link);
 if (@mysqli_errno()){
     echo "数据库选择 失败！<br>";
     die();
 }
 echo "数据库选择成功！<br>";

 mysqli_query($link,"CREATE TABLE mysql_php_prac(xh CHAR (9) NOT NULL ,xm CHAR(9))" or die("失败！"));
 echo "success!";

 ?>