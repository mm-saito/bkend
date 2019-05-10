<?php

class City
{
    private $db;
    private $list;
    private $a;

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

    //市町村名追加
    public function add($pref_id, $city_name, $city_code)
    {
        global $db;
        //SQL作成
        $sql = "INSERT INTO city (prefecture_id, name, citycode) VALUES (:prefecture_id, :name, :citycode)";
        
        
        //値を空で作成
        $stmt = $this->db->prepare($sql);

        //値を設定
        $params = array(':prefecture_id' => (int)$pref_id, ':name' => $city_name, ':citycode' => $city_code);
        
        try {
            //挿入する値をセットした配列をSQLを実行
            $stmt->execute($params);
            echo 'prefecture_id = '. (int)$pref_id ."\n";
            echo 'name = '. $city_name ."\n";
            echo 'city_code = '. $city_code;
            echo 'を登録しました<br>';

        }catch(PDOException $e){
            echo "ErrorMes : " . $e->getMessage() . "\n";
            echo "ErrorCode : " . $e->getCode() . "\n";
            echo "ErrorFile : " . $e->getFile() . "\n";
            echo "ErrorLine : " . $e->getLine() . "\n";
        }
    }

    public function del() {

        global $db;

        //SQL作成
        $sql = "TRUNCATE TABLE city";
        
        try {
            //削除
            $res = $this->db->query($sql);
            echo 'cityを全て削除しました<br>';
            
        }catch(PDOException $e){
            echo "ErrorMes : " . $e->getMessage() . "\n";
            echo "ErrorCode : " . $e->getCode() . "\n";
            echo "ErrorFile : " . $e->getFile() . "\n";
            echo "ErrorLine : " . $e->getLine() . "\n";
        }

    }
}

?>