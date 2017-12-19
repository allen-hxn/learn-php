<?php
/**
 * Created by 胡祥能 on 2017/12/18.
 *  email：huxiangneng@jiuletech.com
 */

//标量类型声明
//PHP 7 中的函数的形参类型声明可以是标量了。在 PHP 5 中只能是类名、接口、array 或者 callable (PHP 5.4，即可以是函数，包括匿名函数)，
//现在也可以使用 string、int、float和 bool 了。

function sumOfInts(int ...$ints)
{
    return array_sum($ints);
}

var_dump(sumOfInts(2, '3', 4.1));