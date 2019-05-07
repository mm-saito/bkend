 <?php
    $json = file_get_contents('../json/sample.json'); //指定したファイルの要素をすべて取得する
    $list = json_decode($json, true);                 //json形式のデータを連想配列の形式にする
    $res = [];
    $region = [];

    /*
      [3]下記の形式に配列にセットして表示させる
      
      [
        "北海道地方" => [
        "県名" => [県名1, ...],
        "市町村名" => [市町村名1, ...],
        ...
        "東北地方" => [
        "県名" => [県名2, ...],
        "市町村名" => [市町村名2, ...],
        ...
      ...
      ]
    */

  echo "課題[3]<br>";

  //連想配列にセット(課題[2]の結果配列を作成)
  foreach ($list as $key1 => $country) {
      foreach ($country as $key2 => $pref) {
        $res += [$pref['name'] => array_column($pref['city'], 'city')];
      }
  }

  //関数で作成した配列を地方ごとに格納
  $region = ['北海道地方' => SplitPref(0,1)];
  $region += ['東北地方' => SplitPref(1,6)];
  $region += ['関東地方' => SplitPref(7,7)];
  $region += ['中部地方' => SplitPref(14,9)];
  $region += ['関西地方' => SplitPref(23,7)];
  $region += ['中国地方' => SplitPref(30,5)];
  $region += ['四国地方' => SplitPref(35,4)];
  $region += ['九州地方' => SplitPref(39,8)];

  //結果表示
  echo('<pre>');
  print_r($region);
  echo('<pre>');

  /*
    [2]の結果配列から県名[]、市町村名[]を作成し返却
    $start:開始位置
    $cnt  :都道府県の数
  */
  function SplitPref($start, $cnt) {

    global $res;

    //地方に分割する
    $list = array_slice($res, $start, $cnt);

    //分割した配列から県名、市町村を取り出す
    foreach ($list as $key => $city) {
      $pref_res['県名'][] =  $key;
      foreach ($city as $key1 => $city_name) {
        $city_res['市町村名'][] = $city_name; 
      }
    }

    return array_merge($pref_res, $city_res);
  }