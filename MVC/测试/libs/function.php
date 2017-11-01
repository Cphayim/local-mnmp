<?php
function C(string $name, string $method)
{
  require (dirname(__FILE__)."/Controller/{$name}Controller.class.php");
  $controller = $name . 'Controller';
  $obj = new $controller();
  $obj->$method();
}

function M(string $name)
{
  require (dirname(__FILE__)."/Model/{$name}Model.class.php");
  $model = $name . 'Model';
  return new $model();
}

function V(string $name)
{
  require (dirname(__FILE__)."/View/{$name}View.class.php");
  $view = $name . 'View';
  return new $view();
}

function daddslashes(string $str)
{
  return (!get_magic_quotes_gpc()) ? addslashes($str) : $str;
}