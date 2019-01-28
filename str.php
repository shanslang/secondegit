<?php
$str = "馃槝馃槝";


$new_str = iconv('UTF-8', 'GBK//TRANSLIT', $str);
var_dump($new_str);

// echo mb_convert_encoding($str, "GBK", "UTF-8");