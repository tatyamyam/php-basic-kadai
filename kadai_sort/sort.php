<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ソート関数の実装</title>
</head>

<body>
  <p>
    <?php
    function sort_2way(&$array, $order = true)
    {
      if ($order) {
        echo nl2br("昇順にソートします。" . PHP_EOL);
        sort($array);
      } else {
        echo nl2br("降順にソートします。" . PHP_EOL);
        rsort($array);
      }
    }

    $nums = [15, 4, 18, 23, 10];

    // 昇順ソート
    sort_2way($nums, true);
    foreach ($nums as $num) {
      echo nl2br($num . PHP_EOL);
    }

    // 初期配列をリセット
    $nums = [15, 4, 18, 23, 10];

    // 降順ソート
    sort_2way($nums, false);
    foreach ($nums as $num) {
      echo nl2br($num . PHP_EOL);
    }
    ?>
  </p>
</body>

</html>