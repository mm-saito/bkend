<?php

class User
{

    //コンストラクタで値セット＆DB接続
    public function __construct($user, $pass)
    {
        try {
            $this->db = new PDO("mysql:host=mzn_db; dbname=mzn; charset=utf8", $user, $pass);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e){
            echo 'DB接続エラー: '.$e->getMessage();
        }
    }

    /*
        登録処理
    */
    public function add($mail, $pass, $name)
    {
        global $db;
        //SQL作成
        $sql = "INSERT INTO user_tbl (mail, pass, name) VALUES (:mail, :pass, :name)";
        
        
        //値を空で作成
        $stmt = $this->db->prepare($sql);

        //値を設定
        $params = array(':mail' => $mail, ':pass' => $pass, ':name' => $name);
        
        try {
            //挿入する値をセットした配列をSQLを実行
            $stmt->execute($params);
            echo '登録しました<br>';
            echo "<a href='./index.php'>ログイン</a>";

        }catch(PDOException $e){
            echo '登録済みのメールアドレスです。';
        }
    }


    /*
        検索処理
    */
    public function find($mail)
    {
        global $db;
        //SQL作成
        $sql = "SELECT * FROM user_tbl WHERE mail = :mail";
        
        
        //値を空で作成
        $stmt = $this->db->prepare($sql);

        //値を設定
        $params = array(':mail' => $mail);
        
        try {
            //SQLを実行
            $stmt->execute($params);
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }catch(PDOException $e){
            echo "ErrorMes : " . $e->getMessage() . "\n";
            echo "ErrorCode : " . $e->getCode() . "\n";
            echo "ErrorFile : " . $e->getFile() . "\n";
            echo "ErrorLine : " . $e->getLine() . "\n";
        }
    }
}