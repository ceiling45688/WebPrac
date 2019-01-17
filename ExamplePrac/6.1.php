<?php
/**
 * Created by PhpStorm.
 * User: celing
 * Date: 2019/1/17
 * Time: 22:36
 */
//类的初始化和使用方式
//要求：新建一个student类包括姓名、性别、学号，setinfo和getinfo方法 ，并测试。
class student {
    var $xm;
    var $xb;
    var $xh;
    function setInfo($xm,$xb,$xh){
        $this-> xm = $xm;
        $this ->xb = $xb;
        $this ->xh = $xh;
    }
    function getInfo(){
        echo $this->xm,"<br>";
        echo $this->xb,"<br>";
        echo $this->xh,"<br>";
    }
}
$test = new student;
$test->setInfo("lily","female","111");
$test->getInfo();
$test->xm = "rose";
$test->getInfo();
?>