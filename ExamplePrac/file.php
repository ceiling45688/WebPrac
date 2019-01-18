<?php
   $handle=fopen('E:\wamp64\www\JavaScriptPrac\WebPrac\ExamplePrac\file', 'r');
    #$handle=fopen('http://www.baidu.com', 'r');

    if($handle){
        while(($char=fgetss($handle))!=false){
            echo $char,"<br>";//循环输出一行文本，去掉HTML和PHP标签
        }
        fclose($handle);//fopen完了要记得fclose关闭打开的文件。
    }else {
        echo "error!";
    }
    echo "<hr>";
    //fread()函数
        $filename='E:\wamp64\www\JavaScriptPrac\WebPrac\ExamplePrac\file';
        $handle=fopen($filename, 'r');
        $content=fread($handle, filesize($filename));
        echo $content;
        fclose($handle);
     //fwrite()函数

?>