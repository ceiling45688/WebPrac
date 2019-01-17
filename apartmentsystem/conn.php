<?php

$db=mysqli_connect("localhost","root","123456","manage");

mysqli_select_db($db,"manage") or die("数据库选择失败！<BR>");

?>