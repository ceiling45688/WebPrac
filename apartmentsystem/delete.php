<?php
include "conn.php";

if(!empty($_GET['id']))
{


        $num=$_GET['id'];


        $sql="delete from student where number=$num  ";
        $query=$db->query($sql);
        $sql2="delete from stu_dorm where Snumber=$num";
        $query2=$db->query($sql2);


            echo "<script>alert('删除成功');location.href='widgets.php'</script>";






}



?>