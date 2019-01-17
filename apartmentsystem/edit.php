<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>edit information</title>
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
						<ul class="nav pull-right"
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
                <?php
                     include "conn.php" ;

                    if(!empty($_GET['id'])) {
                        $num = $_GET['id'];
                        $sql = "select *from student where number=$num";
                        $query = $db->query($sql);
                        $rs = $query->fetch_array();
                        $sql2="select *from stu_dorm where Snumber=$num";
                        $query2=$db->query($sql2);
                        $rs2=$query2->fetch_array();
                    }

                ?>

                <h2>请输入修改信息：</h2>
                <form action="edit.php?id=<?php echo $rs['number']?>" method="post">
                    学号：<?php echo $rs['number']?><br>
                    姓名：<?php echo $rs['name']?><br>
                    性别：<?php echo $rs['sex']?><br>
                    年龄：<?php echo $rs['age']?><br>
                    专业：<input type="text" name="dept" value=<?php echo $rs['dept']?>><br>
                    联系方式：<input type="text" name="phone" value=<?php echo $rs['phone']?>><br>
                    楼栋号：<select name="Bnumber" style="width:100px;color:white;background-color: #4bb1cf" >
                        <option select="selected"><?php echo $rs2['Bnumber']?></option>
                        <option value="1">宁静苑一舍</option>
                        <option value="2">宁静苑二舍</option>
                        <option value="2">宁静苑三舍</option>
                        <option value="4">宁静苑四舍</option>
                    </select><br>
                    宿舍号：<input type="text" name="Dnumber" value=<?php echo $rs2['Dnumber']?>><br>

                    <input type="submit" name="sub" value="保存修改">
                </form>


                <?php

                include "conn.php";
                if(!empty($_POST['sub']))
                {

                        if(empty($_POST['dept'])||empty($_POST['phone'])||empty($_POST['Bnumber'])||empty($_POST['Dnumber']))
                            echo "请将修改信息填写完整";

                        else {
                            $number = $rs['number'];
                            $name = $rs['name'];
                            $sex = $rs['sex'];
                            $age = $rs['age'];
                            $dept = $_POST['dept'];
                            $phone = $_POST['phone'];
                            $Bnum = $_POST['Bnumber'];
                            $Dnum = $_POST['Dnumber'];

                            $sql3 = "update student set dept=$dept,phone=$phone where number=$number ";
                            $db->query($sql3);
                            $sql4 = "update stu_dorm set Bnumber=$Bnum,Dnumber=$Dnum  where Snumber=$number";
                            $db->query($sql4);

                            ?>
                            <h3>学生信息修改成功</h3>
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
