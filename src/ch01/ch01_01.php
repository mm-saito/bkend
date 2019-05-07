<?php
    $json = file_get_contents('../json/sample.json'); //指定したファイルの要素をすべて取得する
    $list = json_decode($json, true);                 //json形式のデータを連想配列の形式にする

    /*
      [1]jsonファイルを読み込んで各都道府県名（キー名：name）を表示させる
    */

    echo "課題[1]<br><br>";
    
    //都道府県を表示
    foreach ($list as $key1 => $country) {
      foreach ($country as $key2 => $pref) {
        echo $pref['name'];
        if ($pref['name'] !== '沖縄県') {
          echo ",";
        }
      }
    }

?>