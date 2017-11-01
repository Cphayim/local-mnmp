<?php
class UserController
{
  public function login()
  {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if (!$username || !$password) {
      die('账号密码不能为空');
    }

    $userModel = M('User');
    $authResult = $userModel->auth($username, $password);

    if ($authResult['status']) {
      echo '登录成功, ' . $authResult['username'];
    }
    else {
      echo '登陆失败, 账号或密码错误';
    }
  }
}
