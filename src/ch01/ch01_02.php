<?php
    $json = file_get_contents('../json/sample.json'); //指定したファイルの要素をすべて取得する
    $list = json_decode($json, true);                 //json形式のデータを連想配列の形式にする
    $res = [];

    /*
    [2]下記の形式に配列にセットして表示させる
    
    [
      "都道府県名A" => [市町村名1, 市町村名2...],
      "都道府県名B" => [市町村名3, 市町村名4...],
      ...
    ]
    */
  echo "課題[2]<br>";

  // $pref = [];
  //連想配列にセット
  foreach ($list as $key1 => $country) {
      foreach ($country as $key2 => $pref) {
        $res += [$pref['name'] => array_column($pref['city'], 'city')];
      }
  }

  //結果表示
  echo('<pre>');
  print_r($res);
  echo('<pre>');
?>