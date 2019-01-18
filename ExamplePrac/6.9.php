<?php
/**
 * Created by PhpStorm.
 * User: celing
 * Date: 2019/1/18
 * Time: 10:32
 */
//clone
class student
{
    var $xh;
    var $xm;
    var $xb;
    function __construct($xh,$xm,$xb)
    {
        $this->xh=$xh;
        $this->xm=$xm;
        $this->xb=$xb;
    }
    function getInfo()
    {
        echo "学号：$this->xh"."<br>";
        echo "姓名：$this->xm"."<br>";
        echo "性别：$this->xb"."<br>";
        echo "<hr>";
    }
    function __clone()
    {
        $this->xm=$this->xm."（克隆的1）";//有些版本可以用that指针
    }
}
//先尝试直接赋值的方式
$mystudent=new student("05330130","liuli","男");
$mystudent_copy=$mystudent;
$mystudent_clone=clone $mystudent;

//$mystudent->xm.="(克隆的)";
$mystudent->getInfo();
$mystudent_copy->getInfo();//直接赋值相当于引用
$mystudent_clone->getInfo();//clone是拷贝副本


?>