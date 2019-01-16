<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>apartment message</title>
	<link id="bootstrap-style" href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
        body { background: url(img/bg2.jpg) ;background-size: 100% ;background-repeat: no-repeat }
    </style></head>

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
                    <a class="brand" ><span>学生宿舍管理系统</span></a>

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

                <h2>请输入查询的宿舍信息：</h2>
                <form action="tasks.php" method="post">
                    楼栋号：
                    <select name="Bnumber" style="width:100px;color:white;background: #4bb1cf" >
                        <option value=" 宁静苑一舍">宁静苑一舍</option>
                        <option value="宁静苑二舍">宁静苑二舍</option>
                        <option value="宁静苑三舍">宁静苑三舍</option>
                        <option value="宁静苑四舍">宁静苑四舍</option>
                    </select>
                    楼层：
                    <select name="Fnumber" style="width:100px;color:white;background: #4bb1cf">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    宿舍号：
                    <select name="Dnumber" style="width:100px;color:white;background: #4bb1cf">
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                    </select>

                    <input type="submit" name="sub" value="点击查询">
                </form>


                <?php

                include "conn.php";

                if(!empty($_POST['sub']))
                {

                        $Bnum = $_POST['Bnumber'];
                        $Fnum = $_POST['Fnumber'];
                        $Dnum = $_POST['Dnumber'];
                        $Dnum ="$Fnum"."$Dnum";


                        $sql = "select * from dorm where Bnumber='$Bnum' AND Dnumber='$Dnum'";


                        $query = $db->query($sql);
                         $rs=$query->fetch_array();

                         $sql2="select *from stu_dorm where Bnumber='$Bnum' AND Dnumber='$Dnum'";
                         $query2=$db->query($sql2);



                        ?>
                    <h2>宿舍信息：</h2>
                <table width="800" border="2"  >
                    <tr>
                        <th>楼栋号</th>
                        <th>宿舍号</th>
                        <th>宿舍人数</th>

                    </tr>

                    <tr>
                     <td align="center"><?php echo $rs['Bnumber'] ?></td>
                    <td align="center"><?php echo $rs['Dnumber'] ?></td>
                    <td align="center"><?php echo $rs['people'] ?></td>
                    </tr>
                </table>
                    <h2>宿舍人员信息：</h2>
                    <table width="800" border="2"  >
                        <tr>
                            <th>学号</th>
                            <th>姓名</th>
                            <th>性别</th>
                            <th>年龄</th>
                            <th>专业</th>
                            <th>联系方式</th>
                        </tr>
                    <?php
                    while($rs2=$query2->fetch_array())
                    {
                        $Snum = $rs2['Snumber'];
                            $sql3 = "select *from student where number='$Snum'";
                            $query3 = $db->query($sql3);
                            $rs3 = $query3->fetch_array();
                            ?>
                        <tr>
                            <td align="center"><?php echo $rs3['number'] ?></td>
                            <td align="center"><?php echo $rs3['name'] ?></td>
                            <td align="center"><?php echo $rs3['sex'] ?></td>
                            <td align="center"><?php echo $rs3['age'] ?></td>
                            <td align="center"><?php echo $rs3['dept'] ?></td>
                            <td align="center"><?php echo $rs3['phone'] ?></td>

                        </tr>


                        <?php
                    }


                }

                ?>
                    </table>

	
</body>
</html>
