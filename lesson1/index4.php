<?php
//统一了变量语法

$goo = [
    'bar'=> [
        'baz'=>100,
        'cug'=>99
    ]
];

$foo = 'goo';

echo $$foo['bar']['baz'];// 实际为：($$foo)['bar']['baz']; PHP 5 中为：${$foo['bar']['baz']};
// PHP 7 中一个笼统的判定规则是，由左向右结合。