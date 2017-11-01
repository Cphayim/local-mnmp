<?php
class HomeView
{
  public function index()
  {
    include(dirname(__FILE__).'/../tpl/from.html');
  }
  public function display($data){
    echo $data;
  }
}
  