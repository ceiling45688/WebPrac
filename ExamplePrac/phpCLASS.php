<?php
/**
 * Created by PhpStorm.
 * User: celing
 * Date: 2018/11/20
 * Time: 21:54
 */
class Site {
    var $url;
    function __construct(){
        echo "这是构造函数"."<br>";
    }
    function setUrl($p) {
        $this->url = $p;
    }
    function getUrl(){
        echo $this->url . PHP_EOL;
    }
}

$baidu = new Site();
$baidu->setUrl("www.baidu.com");
$baidu->getUrl();
?>