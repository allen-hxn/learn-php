<?php
//返回输出缓冲机制的嵌套级别,返回零表示缓存没打开
if (ob_get_level() == 0){
    //打开输出控制缓冲.当输出缓冲激活后，脚本将不会输出内容（除http标头外），相反需要输出的内容被存储在内部缓冲区中。
    ob_start();
}

for ($i = 0; $i<10; $i++){

    echo "<br> Line to show.\n";

    //冲刷出（送出）输出缓冲区中的内容
    ob_flush();
    //刷新PHP程序的缓冲，而不论PHP执行在何种情况下（CGI ，web服务器等等）。该函数将当前为止程序的所有输出发送到用户的浏览器。
//    flush();
    sleep(1);
}

echo "Done.";
//冲刷出（送出）输出缓冲区内容并关闭缓冲
ob_end_flush();