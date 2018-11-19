<?php
/**
 * Created by PhpStorm.
 * User: celing
 * Date: 2018/11/19
 * Time: 19:41
 */

$age = array("hexin"=>"21","xiaohu"=>"20");
foreach ($age as $x=>$x_value){
    echo "name:".$x." age: ". $x_value;
    echo "<br>";
}
//sort数组升序(字母升序) rsort数组降序 asort值升序 ksort键值升序
sort($age);
print_r($age);echo "<br>";
//rsort($age);
//print_r($age);echo "<br>";
//asort($age);
//print_r($age);echo "<br>";
//ksort($age);
//print_r($age);
?>