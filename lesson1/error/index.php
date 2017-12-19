<?php

function exception_handler($exception) {
    echo "Uncaught exception: " , $exception->getMessage(), "\n";
}

set_exception_handler('exception_handler');//设置用户自定义的异常处理函数

throw new Exception('Uncaught Exception');//没有用 try/catch 块来捕获的异常
echo "Not Executed\n";//这句不会执行