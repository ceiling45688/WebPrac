<?php
/**
 * Created by PhpStorm.
 * User: celing
 * Date: 2019/1/17
 * Time: 21:20
 */
//要求：初始化数组arr_zoo[]，数组元素有pelican=>bird，三种方法，
//并输出其值采用直接输出和用变量下标输出。
$arr_zoo1[]="bird";
$arr_zoo2["pelican"] = "bird";
$arr_zoo3 = array("pelican"=>"bird");

echo $arr_zoo1[0],"<br>";
echo $arr_zoo2["pelican"],"<br>";
$key = "pelican";
echo $arr_zoo3[$key],"<br>";


//要求：初始化多维数组  book[][]：111对应name=jack 和page=90，
//222对应name=rose page=100
  $arr_book = array("111"=>array("name"=>"jack","page"=>80),
                    "222" =>array("name"=>"rose","page"=>90));
  echo $arr_book["111"]["name"],"<br>";

function foo()
{
    return array(0,1,2);
}
$array_temp=foo();  //使用变量接受也是可以。
foreach ($array_temp as $va) //$va每次自加一
{
    echo $va."<br>";
}


?>