<?php
/**
 * Created by PhpStorm.
 * User: celing
 * Date: 2019/1/2
 * Time: 23:43
 */
$link = mysqli_connect("localhost","root","123456");
if (!@$link) {
    echo "连接失败！ <br>";
    die();
}
echo "连接成功！<br>";

mysqli_select_db($link,"student_db")or die("连接数据库失败！");
echo "数据库选择成功！<br>";

$sql  = "CREATE TABLE if NOT EXISTS test (xh CHAR (10) NOT NULL ,xm CHAR(10) NOT NULL)";
//不一定要分开拼接字符串，但是一定注意要写（）还有if not exists！
//$sql .= "xm char(10) not null)";

mysqli_query($link,$sql)or die("失败！");
//参数顺序有关系，先link再sql语句-->mysqli函数。
echo "success!";

 ?>