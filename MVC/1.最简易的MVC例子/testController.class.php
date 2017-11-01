<?php

/**
 * 控制器的作用是调用模型，并调用视图，将模型产生的数据传递给视图，并让相关视图去显示
 */
class testController
{
  function show()
  {
    $testModel = new testModel();
    $data = $testModel->get();

    $testView = new testView();
    $testView->display($data);
  }
}