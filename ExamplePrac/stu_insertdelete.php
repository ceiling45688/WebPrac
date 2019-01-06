<?php
/**
 * Created by PhpStorm.
 * User: celing
 * Date: 2019/1/6
 * Time: 21:39
 */
$link = mysqli_connect("localhost","root","123456");
echo "connect successfully! <br>";
mysqli_select_db($link,"student_db") or die("failed!");
echo "select successfully! <br>";
//---------------insert---------
//$sql = "insert into test (xh,xm,xb) VALUES ('854','wang','male')";
//echo "insert successfully!"
//注意双引号里面单引号。
//---------------delete---------
$sql ="delete from test WHERE xh ='854'";
if (mysqli_query($link,$sql)){
    echo "delete successfully! <br>";
}else
    echo "delete failed!";
//??明明没有数据了为什么还是 query ok?
//$row = mysqli_fetch_row($result);
//if (!$row){
//    echo "failed!";
//    die();
//}
?>