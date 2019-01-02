<?php
/**
 * Created by PhpStorm.
 * User: celing
 * Date: 2019/1/2
 * Time: 23:43
 */$link = mysqli_connect("localhost","root","balbabal用时再改");
 if (!@$link) {
     echo "连接失败！ <br>";
    die();
 }
 echo "连接成功！";

 ?>