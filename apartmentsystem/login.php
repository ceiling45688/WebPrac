<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Apartment System</title>

    <link id="base-style" href="css/style.css" rel="stylesheet">
<!--    <link href="css/bootstrap.css" rel="stylesheet">-->
    <style type="text/css">
        body { background: url(img/bg-login.jpg) !important; }
    </style>



</head>

<body>
<div class="container-fluid-full">
    <div class="row-fluid">
        <div class="row-fluid">
            <br>
            <div align="center" >

                <h1>学生宿舍管理系统</h1>

            </div>
            <div class="login-box">

                <h2>欢迎登录</h2>
                <form class="form-horizontal" action="login.php" method="post">
                    <fieldset>

                        <div class="input-prepend" title="Username">
                            <span class="add-on"><i class="halflings-icon user"></i></span>
                            <input class="input-large span10" name="username" id="username" type="text" placeholder="账号"/>
                        </div>
                        <div class="clearfix"></div>

                        <div class="input-prepend" title="Password">
                            <span class="add-on"><i class="halflings-icon lock"></i></span>
                            <input class="input-large span10" name="password" id="password" type="password" placeholder="密码"/>
                        </div>
                        <div class="clearfix"></div>



                        <div class="button-login">
                            <input type="submit" style="background-color: #2FABE9 " name="sub" value="登录">
                        </div>
                        <div class="clearfix"></div>
                </form>
                <hr>

            </div><!--/span-->
        </div><!--/row-->


    </div><!--/.fluid-container-->


<?php
include "conn.php";
if(!empty($_POST['sub']))
{
    $num=$_POST['username'];
    $pass=$_POST['password'];

    $sql="select * from manager where number=$num  ";

    $result=$db->query($sql);
    $num_row=mysqli_num_rows($result);
    if($num_row==0)
        echo "<script>alert('用户不存在！')</script>";
    else
    {
        $rs=$result->fetch_array();
        if($rs['password']==$pass)
        {
            session_start();
            $num=$rs['number'];

            echo "<script>alert('登录成功！');location.href='index.php?id=$num'</script>";
        }

        else
            echo "<script>alert('用户名或密码错误！')</script>";

    }


}

?>
</body>
</html>