<?php
class Test
{
  private static $_instance = null;

  private function __constructor()
  {

  }
  private function __clone()
  {

  }

  public static function getInstance()
  {
    if (! (self::$_instance instanceof self)) {
      self::$_instance = new self();
    }
    return self::$_instance;
  }
}

$test1 = Test::getInstance();
$test2 = Test::getInstance();
$test3 = Test::getInstance();
$test4 = Test::getInstance();

var_dump($test1);
var_dump($test2);
var_dump($test3);
var_dump($test4);