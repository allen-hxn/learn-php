<?php
/**
 * Created by 胡祥能 on 2017/12/19.
 *  email：huxiangneng@jiuletech.com
 */

//这接受一个以16进制形式的 Unicode codepoint，并打印出一个双引号或heredoc包围的 UTF-8 编码格式的字符串。 可以接受任何有效的 codepoint，并且开头的 0 是可以省略的。

echo "\u{aa}";
echo "\u{0000aa}";
echo "\u{9999}";