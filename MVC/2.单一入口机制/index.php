<?php

// url 形式 index.php?controller=控制器名&method=方法名
require ('./function.php');

// 允许访问的控制器名
$controllerAllow = ['Test', 'Index']; 
// 允许访问的控制器方法
$methodAllow = ['test', 'index', 'show'];

$controller = isset($_GET['controller']) && in_array($_GET['controller'], $controllerAllow) ?
  daddslashes($_GET['controller']) : 'Test';
$method = isset($_GET['method']) && in_array($_GET['method'], $methodAllow) ?
  daddslashes($_GET['method']) : 'show';

C($controller, $method);

  
