<!DOCTYPE html>
<html lang="en">
<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>index</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
        body { background: url(img/bg2.jpg) ;background-size: 100% ;background-repeat: no-repeat }
    </style>
</head>

<body>

<!--导航栏-->
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" ><span>学生宿舍管理系统</span></a>

            <!-- 返回登录界面 -->
            <div class="nav-no-collapse header-nav">
                <ul class="nav pull-right">
                            <li><a href="login.php"><i class="halflings-icon off"></i> 退出登录</a></li>
                </ul>
            </div>
            <!-- 返回登录界面 -->

        </div>
    </div>
</div>
<!--导航栏-->

<div class="container-fluid-full">
    <div class="row-fluid">

        <!-- 侧边栏 -->
        <div id="sidebar-left" class="span2">
            <div class="nav-collapse sidebar-nav">
                <ul class="nav nav-tabs nav-stacked main-menu">
                    <li><a href="index.php"><i class="icon-bar-chart"></i><span class="hidden-tablet"> 首页</span></a></li>
                    <li><a href="tasks.php"><i class="icon-tasks"></i><span class="hidden-tablet"> 宿舍信息查询</span></a></li>
                    <li><a href="ui.php"><i class="icon-eye-open"></i><span class="hidden-tablet"> 学生入住登记</span></a></li>
                    <li><a href="widgets.php"><i class="icon-dashboard"></i><span class="hidden-tablet"> 学生信息管理</span></a></li>
                </ul>
            </div>
        </div>
        <!-- 侧边栏 -->
        <!--主页内容-->
            <div style="padding-left: 35%">
                <h1 style="color: white">欢迎来到学生宿舍管理系统</h1>
            </div>
        <!--主页内容-->
    </div>
</div>

</body>
</html>
