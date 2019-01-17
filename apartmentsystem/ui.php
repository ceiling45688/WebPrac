<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>student information</title>
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
                        <li><a href="index.php"><i class="icon-bar-chart"></i><span class="hidden-tablet"> 首页</span></a></li>
                        <li><a href="tasks.php"><i class="icon-tasks"></i><span class="hidden-tablet"> 宿舍信息查询</span></a></li>
                        <li><a href="ui.php"><i class="icon-eye-open"></i><span class="hidden-tablet"> 学生入住登记</span></a></li>
                        <li><a href="widgets.php"><i class="icon-dashboard"></i><span class="hidden-tablet"> 学生信息管理</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- end: Main Menu -->
			
			<!-- start: Content -->
			<div id="content" class="span10">

                <h2>请输入入住学生信息：</h2>
                <form action="ui.php" method="post">
                    学号：<input type="text"  name="number"><br>
                    姓名：<input type="text" name="name"><br>
                    性别：<input type="text" name="sex"><br>
                    年龄：<input type="text" name="age"><br>
                    专业：<input type="text" name="dept"><br>
                    联系方式：<input type="text" name="phone"><br>
                    楼栋号：<select name="Bnumber" style="width:100px;color:white;background-color: #4bb1cf" >
                            <option value="1">宁静苑一舍</option>
                            <option value="2">宁静苑二舍</option>
                            <option value="3">宁静苑三舍</option>
                            <option value="4">宁静苑四舍</option>
                             </select><br>
                    宿舍号：<input type="text" name="Dnumber"><br>

                    <input type="submit" name="sub" value="添加">
                </form>



                <?php

                    include "conn.php";
                    if(!empty($_POST['sub']))
                    {

                        if(empty($_POST['number'])||empty($_POST['name'])||empty($_POST['sex'])||empty($_POST['age'])||empty($_POST['dept'])||empty($_POST['phone'])||empty($_POST['Bnumber'])||empty($_POST['Dnumber']))
                            echo "请将添加信息填写完整！";
                        else
                            {
                                $number=$_POST['number'];
                                $Snumber = $_POST['number'];
                                $name = $_POST['name'];
                                $sex = $_POST['sex'];
                                $age = $_POST['age'];
                                $dept = $_POST['dept'];
                                $phone = $_POST['phone'];
                                $Bnum = $_POST['Bnumber'];
                                $Dnum = $_POST['Dnumber'];

                                $sql = "insert into student values('$number','$name','$sex','$age','$dept','$phone') ";
                                $db->query($sql);
                                $sql2 = "insert into stu_dorm values('$Snumber','$Bnum','$Dnum')";
                                $db->query($sql2);


                                ?>
                                <h3>学生信息添加成功</h3>
                                <table width="800" border="2">
                                    <tr>
                                        <th>学号</th>
                                        <th>姓名</th>
                                        <th>性别</th>
                                        <th>年龄</th>
                                        <th>专业</th>
                                        <th>联系方式</th>
                                        <th>宿舍</th>
                                    </tr>

                                    <tr>
                                        <td align="center"><?php echo $number ?></td>
                                        <td align="center"><?php echo $name ?></td>
                                        <td align="center"><?php echo $sex ?></td>
                                        <td align="center"><?php echo $age ?></td>
                                        <td align="center"><?php echo $dept ?></td>
                                        <td align="center"><?php echo $phone ?></td>
                                        <td align="center"><?php echo $Bnum . "" . $Dnum ?></td>

                                    </tr>
                                </table>
                                <?php
                            }

                    }


                ?>






</body>
</html>
