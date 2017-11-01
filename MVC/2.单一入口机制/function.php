<?php

/**
 * 控制器调用函数
 * @param string $name 需要创建的控制器类名
 * @param string $method 调用的控制器方法
 * // 原则上控制器方法是不带参数的，固将调用方法这部也封装进 C 函数
 * @return void
 */
function C(string $name, string $method)
{
  require ('./libs/Controller/' . $name . 'Controller.class.php');
    // $testController = new TestController();
    // $testController->show();


  /**
   * 方案一：
   * 使用 eval 函数执行字符串代码
   */
    // eval('$obj = new '.$name.'Controller(); $obj->'.$method.'();');


  /**
   * eval 函数调用简单但是不安全
   * 可用以下方案代替
   * 
   * 方案二：
   */
  $controller = $name . 'Controller';
  $obj = new $controller();
  $obj->$method();
}

/**
 * 模型调用函数
 * @param string $name
 * @return object
 */
function M(string $name)
{
  require ('./libs/Model/' . $name . 'Model.class.php');

  $model = $name . 'Model';

    // 返回模型对象
  return new $model();
}

/**
 * 视图调用函数
 * @param string $name
 * @return object
 */
function V(string $name)
{
  require ('./libs/View/' . $name . 'View.class.php');

  $view = $name . 'View';

  return new $view();
}

/**
 * 转义非法字符
 * @param string $str
 * @return string
 */
function daddslashes(string $str)
{
  /**
   * addslashes:
   * 对字符串内的 单引号（'）、双引号（"）、反斜线（\）与 NUL（NULL 字符）进行\转义
   * 默认地，PHP 对所有的 GET、POST 和 COOKIE 数据自动运行 addslashes()。
   * 所以您不应对已转义过的字符串使用 addslashes()，因为这样会导致双层转义。遇到这种情况时可以使用函数 get_magic_quotes_gpc() 进行检测。
   */
  /**
   * get_magic_quotes_gpc：
   * 判断 magic_quotes_gpc 配置的状态，若为 on 返回 true，为 off 则返回 false
   * magic_quotes_gpc 为 on 时将自动转义特殊符号
   */ 
  // addslashes：对单引号等特殊符号转义
  return (!get_magic_quotes_gpc()) ? addslashes($str) : $str;
}