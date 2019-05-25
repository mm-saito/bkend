<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>index</title>
</head>
<body>
<p>index</p>
<table>
    <th>地方名</th><th>県ID</th><th>県名</th><tr>
    <? foreach($largeArea as $val): ?>
        <? $area_name = $val->name ?>
        <? $prefecture_id = $val->prefecture_id ?>
        <? $prefecture_name = $val->prefecture_name ?>
        <td>
            <?= $area_name ?>
        </td>
        <td>
            <?= $prefecture_id ?>
        </td>
        <td>
            <?= $this->Form->postLink($prefecture_name, 
                                      ['controller' => 'Prefecture', 'action' => 'view', $prefecture_id], 
                                      ['data' => $prefecture_id]);?>
        </td>
        <tr>
    <? endforeach; ?>
</table>
</body>
</html>