<?php
if (!isset($_POST["submit"])){
    echo $_POST["name"];
    $cars = $_POST["cars"];
    foreach ($cars as $variable){
        echo $variable;
    }
}
?>
/**
 * Created by PhpStorm.
 * User: celing
 * Date: 2018/11/7
 * Time: 20:17
 */