<?php
class UserModel
{
  public function auth(string $username, string $password)
  {
    $accounts = [
      [
        'username' => 'Cphayim',
        'password' => '123456'
      ]
    ];

    $result = false;
    foreach ($accounts as $item) {
      if ($item['username'] == $username && $item['password'] == $password) {
        $result = true;
        setcookie('token', md5(uniqid()));
      }
    }
    return [
      'status' => $result,
      'username' => $username
    ];
  }
}
  