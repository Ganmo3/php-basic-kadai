<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

  <body>
    <p>
      <?php
      $scores = array(80, 60, 55, 40, 100, 25, 80, 95, 30, 60);
      
      // 合計点算出
      $total = 0;
      foreach ($scores as $score) {
        $total += $score;
      }

      echo "合計点は". $total ."<br>";

      // 平均点算出
      $average = $total / count($scores);

      echo "平均点は" . $average;
      ?>
    </p>
  </body>
</html>
