<?php
  $message = $_GET['message'];
  echo h($message);
  print_r(h($_GET));

  /*getの値をエスケープする*/
  function h($data){
    if (is_array($data)) {
      //配列の場合
      return array_map("h",$data);
    } else {
      //配列でない場合
      return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    }
}

?>

<!DOCTYPE html>
<html lang = "ja">
<head><meta charset = "UFT-8"></head>
<body>
<form action = "ch02_01.php" method = "get">
<input type = "text" name ="message"><br/>
<input type="checkbox" name="hoby[]" value="musicappreciation">音楽鑑賞<br/>
<input type="checkbox" name="hoby[]" value="moviegoing">映画鑑賞<br/>
<input type="checkbox" name="hoby[]" value="reading">読書<br/>
<input type="checkbox" name="hoby[]" value="fishing">釣り<br/>
<input type = "submit" value ="submit">
</form>
</body>
</html>