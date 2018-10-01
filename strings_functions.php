<?php
/*Функция для разбиения посимвольно многобайтовой строки с записью результата в массив*/
function mbStringToArray($string, $encoding = 'UTF-8')
{
    $strlen = mb_strlen($string);
    while ($strlen) {
        $array[] = mb_substr($string, 0, 1, $encoding);
        $string = mb_substr($string, 1, $strlen, $encoding);
        $strlen = mb_strlen($string, $encoding);
    }
    return ($array);
}
