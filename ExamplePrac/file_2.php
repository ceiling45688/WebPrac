<?php
    //简单爬虫

    $filename="sina_source.txt";
    $writer=fopen($filename,"w");
    if(is_writable($filename))
    {
        if($file1=fopen("http://www.sina.com.cn","r"))
        {
             while(!feof($file1))
             {
                 $content=fgets($file1);
                 echo $content."<br>";
                 fwrite($writer, $content."\n");
             }
        }
        else
        {
            echo "can not open sina";
        }
        fclose($file1);
    }
    else{
        echo "Can not write the ".$filename;
    }
    fclose($writer);


    $filename="sina_source.txt";
    $filename_bak="sina_source.txt.bak";
    if(copy($filename,$filename_bak))
    {
        echo "copy successfully";
    }
    unlink($filename_bak);
    
?>