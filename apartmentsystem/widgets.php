<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>information management</title>
	<link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
        body { background: url(img/bg2.jpg) ;background-size: 100% ;background-repeat: no-repeat }
    </style>
</head>

<body>
		<!-- start: Header -->
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand"><span>学生宿舍管理系统</span></a>

					<!-- start: Header Menu -->
					<div class="nav-no-collapse header-nav">
						<ul class="nav pull-right">
                                    <li><a href="login.php"><i class="halflings-icon off"></i> 退出登录</a></li>
						</ul>
					</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="tasks.php"><i class="icon-tasks"></i><span class="hidden-tablet"> 宿舍信息查询</span></a></li>
						<li><a href="ui.php"><i class="icon-eye-open"></i><span class="hidden-tablet"> 学生入住登记</span></a></li>
						<li><a href="widgets.php"><i class="icon-dashboard"></i><span class="hidden-tablet"> 学生信息管理</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->

			<!-- start: Content -->
			<div id="content" class="span10">
                <h2>请输入将进行管理的学生学号</h2>
                <form action="widgets.php" method="post">
                    学号：<input type="text" name="keys" " >
                    <input type="submit" name="sub" value="点击查询">
                </form>


                <?php

                include "conn.php";

                if(!empty($_POST['sub']))
                {
                $keys=$_POST['keys'];
                $sql="select * from student where number=$keys";


                $query=$db->query($sql);
                $rs=$query->fetch_array();

                        $sql2="select *from stu_dorm where Snumber='$keys'";
                        $query2=$db->query($sql2);
                        $rs2=$query2->fetch_array();

                ?>

                <table width="800" border="2"  >
                    <tr>
                        <th>学号</th>
                        <th>姓名</th>
                        <th>性别</th>
                        <th>年龄</th>
                        <th>专业</th>
                        <th>联系方式</th>
                        <th>宿舍</th>
                        <th>操作</th>
                    </tr>

                        <tr>
                            <td align="center"><?php echo $rs['number'] ?></td>
                            <td align="center"><?php echo $rs['name'] ?></td>
                            <td align="center"><?php echo $rs['sex'] ?></td>
                            <td align="center"><?php echo $rs['age'] ?></td>
                            <td align="center"><?php echo $rs['dept'] ?></td>
                            <td align="center"><?php echo $rs['phone'] ?></td>
                            <td align="center"><?php echo $rs2['Bnumber']."".$rs2['Dnumber'] ?></td>
                            <td align="center"><a href="delete.php?id=<?php echo $rs['number'] ?>">删除</a> <a href="edit.php?id=<?php echo $rs['number'] ?>">修改</a> </td>

                        </tr>
                </table>
                        <?php


                    }
                    ?>



	
</body>
</html>
