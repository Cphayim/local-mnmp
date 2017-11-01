<?php
class HomeController
{
  public function index()
  {
    $homeView = V('Home');
    $homeView->index();
  }

  public function visit()
  {
    $homeModel = M('Home');
    $data = $homeModel->get();
    $homeView = V('Home');
    $homeView->display($data);
  }
}
