<?php
session_start();

if (isset($_SESSION["EMAIL"])) {
  echo 'ログアウトしました';
  echo "<br><a href='./index.php'>TOP</a>";
} else {
  echo 'タイムアウトしました。';
}

//セッション変数のクリア
$_SESSION = array();

//セッションクリア
@session_destroy();

?>