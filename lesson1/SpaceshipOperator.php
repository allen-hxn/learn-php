<?php
/**
 * Created by 胡祥能 on 2017/12/18.
 *  email：huxiangneng@jiuletech.com
 */
//飞船操作符（Spaceship Operator）
//形式：(expr) <=> (expr)
//左边运算对象小，则返回-1；左、右两边运算对象相等，则返回0；左边运算对象大，则返回1。

$name = ["Simen", "Suzy", "Cook", "Stella"];
usort($name, function ($left, $right) {
    return $left <=> $right;
});
print_r($name);

echo 1 <=> 2;
echo 'a' <=> 'b';