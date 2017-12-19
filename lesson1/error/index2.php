<?php
//function error_handler($error) {
//    echo "Uncaught Error: " , $error->getMessage(), "\n";
//}
//
//set_error_handler('error_handler');//设置用户自定义的异常处理函数

function test(){
    try {
        $a = 10 % 0;
//        $b = 10 / 0;//这样捕捉不到error
        return 'Done';
    } catch (DivisionByZeroError $error) {
        return 'Error message：' . $error->getMessage();
    }
}
echo test();