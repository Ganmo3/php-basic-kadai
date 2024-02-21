<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 配列を指定された方向にソートして表示する関数
        function sort_2way($array, $order) {
          // $orderがTRUEの場合は昇順、FALSEの場合は降順にソート
          if ($order) {
            sort($array);
          } else {
            rsort($array);
          }

          // 配列を繰り返し処理
          foreach ($array as $element) {
            echo $element . "<br>";
          }
        }

        // ソートのための配列
        $nums = [15, 4, 18, 23, 10];

        echo "昇順にソートします。<br>";
        sort_2way($nums, TRUE);

        echo "降順にソートします。<br>";
        sort_2way($nums, FALSE);
        ?>
    </p>
</body>

</html>
