<?php

class LargeArea
{
    private $db;
    private $area_name;
    private $list;

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

    //新規地方作成
    public function add($area_name, $pref_name)
    {
        global $db;
        //SQL作成
        $sql = "INSERT INTO large_area (name, prefecture_id) VALUES (:name, :prefecture_id)";
        
        //値を空で作成
        $stmt = $this->db->prepare($sql);

        //ステークホルダに値を設定
        $params = array(':name' => $area_name, ':prefecture_id' => $pref_name);
        
        try {
            //挿入する値をセットした配列をSQLを実行
            $stmt->execute($params);
            echo 'name = '. $area_name ."\n";
            echo 'prefecture_id = '. $pref_name ."\n";
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
        $sql = "DELETE FROM large_area";
        
        try {
            //削除
            $res = $this->db->query($sql);
            echo 'large_areaを全て削除しました<br>';

        }catch(PDOException $e){
            echo "ErrorMes : " . $e->getMessage() . "\n";
            echo "ErrorCode : " . $e->getCode() . "\n";
            echo "ErrorFile : " . $e->getFile() . "\n";
            echo "ErrorLine : " . $e->getLine() . "\n";
        }

    }
}

?>