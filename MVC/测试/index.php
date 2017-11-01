<?php
header('Content-Type:text/html;charset=utf-8');

require (dirname(__FILE__) . '/libs/function.php');

 // 允许访问的控制器名
$controllerAllow = ['Home', 'User'];
 // 允许访问的控制器方法名
$methodAllow = ['index', 'visit', 'login'];

$controller =
  isset($_GET['c']) && in_array(daddslashes($_GET['c']), $controllerAllow) ?
  daddslashes($_GET['c']) : 'Home';

$method =
  isset($_GET['m']) && in_array(daddslashes($_GET['m']), $methodAllow) ?
  daddslashes($_GET['m']) : 'index';

C($controller, $method);