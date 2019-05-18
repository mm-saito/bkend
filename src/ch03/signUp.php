<?php
  require_once('./model/User.php');
  const DB_USER = 'user';
  const DB_PASS = 'pass';


  //メールアドレスのバリデーション
  if (!$mail = filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
    echo 'メールアドレスが不正です。';
    return false;
  }

  //passのハッシュ化
  $pass= password_hash($_POST['pass'], PASSWORD_DEFAULT);

  //modelインスタンス生成
  $user = new User(DB_USER,DB_PASS);

  //登録処理
  $user->add($_POST['mail'], $pass, $_POST['name']);
?>