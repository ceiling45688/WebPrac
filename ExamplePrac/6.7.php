<?php

class student {
    public $xm;
    private $xb;
    protected $xh;

    function __construct($xm,$xb,$xh)
    {
        $this->xm = $xm;
        $this->xb = $xb;
        $this->xh = $xh;
        echo "这是父类构造函数";
    }
    function __set($name, $value)
    {
        $this->$name = $value;
        // TODO: Implement __set() method.
    }
    function __get($name)
    {
        if(isset($this->$name))
            return ($this->$name);
        else
            return null;
        // TODO: Implement __get() method.
    }
    function getInfo(){
        echo $this->xm,"<br>";
        echo $this->xb,"<br>";
        echo $this->xh,"<br>";
    }
    function __destruct()
    {
        echo "student:".$this->xm."destructed!";
        // TODO: Implement __destruct() method.
    }


}
$Mystudent = new student("lilei","mail","123456");
echo "student's name:".$Mystudent->xm."<br>";
echo $Mystudent->getInfo();
$Mystudent=null;
/**
 * Created by PhpStorm.
 * User: celing
 * Date: 2018/11/14
 * Time: 23:30
 */

class mystudent extends student {
  private $department;
  private $specialty;

    function __construct($xm,$xb,$xh,$deparment,$specialty)
    {
        $this->xm = $xm;
        $this->xb = $xb;
        $this->xh = $xh;
        $this->department = $deparment;
        $this->specialty = $specialty;
    }

    function getXB()
    {
        echo "性别：$this->xb <br>";
    }
    function setdepartment($department)
    {
        $this->department=$department;
    }
    function getdepartment()
    {
        echo "系别：$this->department <br>";
    }
    function setspecialty($specialty)
    {
        $this->specialty=$specialty;
    }
    function getspecialty()
    {
        echo "专业：$this->specialty <br>";
    }
    function getInfoMore()
    {
        parent::getInfo();
        echo "系别：$this->department <br>";
        echo "专业：$this->specialty <br>";
    }
}
echo "<hr>";
$test2 = new mystudent("jake","male","222","cs","cs");
//调用父类构造方法？？--->函数名相同，一律被覆盖，且不会先调用父类的构造方法。

echo $test2->getInfoMore();

?>