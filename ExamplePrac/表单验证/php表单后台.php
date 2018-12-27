<?php
if (isset($_POST["submit"])){
    echo $_POST["name"]."<br>";
    echo $_POST["age"]."<br>";
    echo $_POST["email"]."<br>";
    $majors = $_POST["majors"];
    foreach ($majors as $variable){
             echo $variable."<br>";
    }
}

/**
 * Created by PhpStorm.
 * User: celing
 * Date: 2018/11/7
 * Time: 20:17
 */
 ?>