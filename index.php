<?php
header('content-type：text/html;charset=utf-8');

// 获取平均数
function avg(...$args){
  $length = count($args);
  return array_sum($args) / $length;
}
echo avg(1,2,3,4);