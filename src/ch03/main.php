<?php
  
  require_once('./model/City.php');
  require_once('./model/Prefecture.php');
  require_once('./model/LargeArea.php');
  $json = file_get_contents('../json/sample.json'); //指定したファイルの要素をすべて取得する
  $list = json_decode($json, true);                 //json形式のデータを連想配列の形式にする
  const DB_USER = 'user';
  const DB_PASS = 'pass';

  //ボタン押下で処理を振り分け
  if(isset($_POST['area_insert'])) {
    //areaテーブル格納処理呼び出し
    area_insert();
  }
  else if(isset($_POST['pref_insert'])) {
    //prefectureテーブル格納処理呼び出し
    pref_insert();
  } 
  else if(isset($_POST['city_insert'])) {
    //cityテーブル格納処理呼び出し
    city_insert();
  } 
  else if(isset($_POST['all_delete'])) {
    //全テーブル削除処理呼び出し
    all_delete();
  } 

  /*
    prefectureテーブルにデータを格納
  */
  function pref_insert() {
    
    global $list;
    //modelインスタンス生成
    $pref_model = new Prefecture(DB_USER,DB_PASS);

    //prefecutureテーブルに格納
    foreach ($list as $key1 => $country) {
      foreach ($country as $key2 => $pref) {
        $pref_model->add($pref['id'], $pref['name']);
      }
    }
  }

  /*
    cityテーブルにデータを格納
  */
  function city_insert() {
    
    global $list;
    //modelインスタンス生成
    $city_model = new City(DB_USER,DB_PASS);
  
    //cityテーブルに格納
    foreach ($list as $key1 => $country) {
      foreach ($country as $key2 => $pref) {
        foreach ($pref['city'] as $city) {
          $city_model->add($pref['id'], $city['city'], $city['citycode']);
        }
      }
    }
  }

  /*
    LargeAreaテーブルにデータを格納
  */
  function area_insert() {

    global $list;
    //modelインスタンス生成
    $area_model = new LargeArea(DB_USER,DB_PASS);

    $large_area = [
      "北海道地方" => ["01"],
      "東北地方" => ["02", "03", "04", "05", "06", "07"],
      "関東地方" => ["08", "09", "10", "11", "12", "13", "14"],
      "中部地方" => ["15", "16", "17", "18", "19", "20","21", "22", "23"],
      "関西地方" => ["24", "25", "26", "27", "28", "29", "30"],
      "中国地方" => ["31", "32", "33", "34", "35"],
      "四国地方" => ["36", "37", "38", "39"],
      "九州地方・沖縄地方" => ["40", "41", "42", "43", "44", "45", "46", "47"]
    ];
    
    // エリアごとにループ
    foreach ($list as $key1 => $country) {
      foreach ($country as $pref) {
        // 大エリアごとにループ
        foreach ($large_area as $l_area_name => $l_area_info)
        // 大エリア対象のエリアIDがあったらadd呼び出し
        if(in_array($pref["id"], $l_area_info, TRUE)) {
          $area_model->add($l_area_name, $pref["name"]);
        }
      }
    }
  }

  /*
    全テーブル内削除
  */
  function all_delete() {

    //modelインスタンス生成
    $area_model = new LargeArea(DB_USER,DB_PASS);
    $pref_model = new Prefecture(DB_USER,DB_PASS);
    $city_model = new City(DB_USER,DB_PASS);

    $city_model->del();
    $pref_model->del();
    $area_model->del();

  }


?>
