<?php
// php7 新特性
//空合并操作符（Null Coalesce Operator）
$a = '123';
$b = $a ?? '456';

print_r($b);
$c = $d ?? 'abc';

print_r($c);