<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>city</title>
</head>
<body>
<p>city</p>
<table>
    <th>県ID</th><th>都市名</th><tr>
    <? foreach($prefecture['city'] as $val): ?>
        <td>
            <?= $val->prefecture_id ?>
            
        </td>
        <td>
            <?= $val->name ?>
        </td>
        <tr>
    <? endforeach; ?>
</table>
</body>
</html>