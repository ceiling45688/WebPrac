<?php
/**
 * Created by PhpStorm.
 * User: celing
 * Date: 2018/11/19
 * Time: 18:53
 * EOF作用就是按照原样输出EOF中的东西，包括换行格式
 * 定界符EOF中特殊字符不需要转义,也不需要连接符
 */
$name = "ceiling";
$a = <<<EOF
        "abc"$name<br>
        "123"<br>
        123
        <hr>
EOF;

echo $a;
?>
