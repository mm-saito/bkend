<?php

function h($s){
  return htmlspecialchars($s, ENT_QUOTES, 'utf-8');
}

session_start();
//ログイン済みの場合
if (isset($_SESSION['EMAIL'])) {
    echo 'ようこそ' .  h($_SESSION['EMAIL']) . "さん<br>";
?>
    <!DOCTYPE html>
    <head>
        ch03_02
    </head>
    <body>
        <form method="post" action="main.php">
        <button type="submit" name="pref_insert" style="width: 300px; height: 50px; font-size: 15pt; margin-bottom: 10px;">
            1.prefectureテーブル格納
        </button><br>
        <button type="submit" name="area_insert" style="width: 300px; height: 50px; font-size: 15pt; margin-bottom: 10px;">
            2.LargeAreaテーブル格納
        </button><br>
        <button type="submit" name="city_insert" style="width: 300px; height: 50px; font-size: 15pt; margin-bottom: 10px;">
            3.cityテーブル格納
        </button><br>
        <button type="submit" name="all_delete" style="width: 300px; height: 50px; font-size: 15pt; margin-bottom: 10px;">
            全テーブル削除
        </button>
        </form>
        <a href='./logout.php'>ログアウト</a>
    </body>
<?   exit; } 
?>
<!-- ログインしていない場合　!-->
<!DOCTYPE html>
<html lang="ja">
 <head>
   <meta charset="utf-8">
   <title>Login</title>
 </head>
 <body>
   <h1>ログインしてください。</h1>
   <form  action="login.php" method="post">
     email:
     <input type="mail" name="mail"><br>
     pass :
     <input type="pass" name="pass"><br>
     <button type="submit">ログイン</button><br>
     <a href='./regist.php'>新規登録</a>
   </form>