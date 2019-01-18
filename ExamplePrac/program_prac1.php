<?php
/**
 * Created by PhpStorm.
 * User: celing
 * Date: 2019/1/17
 * Time: 21:53
 */
//编程练习1：.要求：一个姓名输入框，下拉复选框（苹果、橘子、西瓜、雪梨），
//前端提交时姓名不能为空，在后台输出结果.


?>
<!doctype html>
<html>
    <head>
        <title>prac1</title>
    </head>
    <body>
        <form action="" method="post">
            name:<input type="text" name="name"><br>
            fruit:<select multiple name="fruits[]">
                <option value="apple">apple</option>
                <option value="origin">origin</option>
                <option value="watermelon">watermelon</option>
                <option value="pear">pear</option>
            </select>
        </form>
    </body>
<script type="text/javascript">
    function check() {

    }
</script>
</html>
