<?php
  try{
    //DB接続
    $dbh = new PDO("mysql:host=mzn_db; dbname=mzn; charset=utf8", 'user', 'pass');
  
  }catch(PDOException $e) {
    echo "DB接続エラー";
  
  }

  //SQL作成 [2]usersテーブルから20件表示
  $sql = "SELECT * FROM users LIMIT 20;";

  //クエリ実行関数呼び出し
  $select_res = select($sql);

  //結果出力
  foreach($select_res as $val) {
    echo "id: ".$val['id']."<br>";
    echo "userid: ".$val['user_id']."<br>";
    echo "create_timestamp: ".$val['create_timestamp']."<br>";
    echo "update_timestamp: ".$val['update_timestamp']."<br>";
  }
  
  /*
    クエリ実行関数
  */
  function select($sql) {
    global $dbh;

    try{
      //クエリ実行
      $res = $dbh->query($sql);

    }catch(PDOException $e){
      echo "SQL実行エラー";
    }

    //接続終了
    $dbh = null;

    return $res;
  }
?>