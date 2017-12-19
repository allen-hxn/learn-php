<?php
/**
 * Created by 胡祥能 on 2017/12/18.
 *  email：huxiangneng@jiuletech.com
 */
//Closure::call() 现在有着更好的性能，简短干练的暂时绑定一个方法到对象上闭包并调用它
//闭包

class A {private $x = 1;}

// PHP 7+ 及更高版本的代码
$getX = function() {return $this->x;};
echo $getX->call(new A);