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
    function __destruct()
    {
        echo "student:".$this->xm."destructed!";
        // TODO: Implement __destruct() method.
    }
}
$Mystudent = new student("lilei","mail","123456");
echo "student's name:".$Mystudent->xm."<br>";
$Mystudent=null;
/**
 * Created by PhpStorm.
 * User: celing
 * Date: 2018/11/14
 * Time: 23:30
 */