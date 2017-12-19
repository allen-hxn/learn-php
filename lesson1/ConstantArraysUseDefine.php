<?php
/**
 * Created by 胡祥能 on 2017/12/18.
 *  email：huxiangneng@jiuletech.com
 */

//常量数组（Constant Array）
//PHP 7 之前只允许类/接口中使用常量数组，现在 PHP 7 也支持非类/接口的普通常量数组了。

define('ARR', [
    'name'=>'simen',
    'age'=>23,
    'skill'=> ['PHP']
]);

print_r(ARR);

// ARR["skill"][2] = "C/C++";  // PHP Fatal error:  Cannot use temporary expression in write context in...