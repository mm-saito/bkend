<?php
  require_once('./model/User.php');
  const DB_USER = 'user';
  const DB_PASS = 'pass';

  //modelインスタンス生成
  $user = new User(DB_USER,DB_PASS);

  //検索処理

  session_start();

  $row = $user->find($_POST['mail']);
  //メールアドレスがDBに存在するか
  if (!isset($row['mail'])) {
    echo 'メールアドレス又はパスワードが間違っています。';
    return false;
  }
  //パスワード確認後sessionにメールアドレスを渡す
  if (password_verify($_POST['pass'], $row['pass'])) {
    session_regenerate_id(true); //session_idを新しく生成し、置き換える
    $_SESSION['EMAIL'] = $row['mail'];
    header('Location: ./index.php');
    exit;
  } else {
    echo 'メールアドレス又はパスワードが間違っています。';
    return false;
  }
?>

 
