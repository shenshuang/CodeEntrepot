<?php

function mbStrSplit ($string, $len=1) {
  $start = 0;
  $strlen = mb_strlen($string);
  while ($strlen) {
    $array[] = mb_substr($string,$start,$len,"utf8");
    $string = mb_substr($string, $len, $strlen,"utf8");
    $strlen = mb_strlen($string);
  }
  return $array;
}

$str = '申爽';

var_dump(mbStrSplit($str));

exit();
