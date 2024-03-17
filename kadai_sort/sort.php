<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="utf-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
      <?php
      // ソートする配列を宣言
      $nums = [15, 4, 18, 23, 10];

      // ソート関数を定義する
      function sort_2way($array, $order) {
        if ($order === TRUE) {
          echo '昇順にソートします。<br>';
          sort($array);
          foreach ($array as $num_sorted) {
            echo $num_sorted .'<br>';
          }
        } else {
          echo '降順にソートします。<br>';
          rsort($array);
          foreach ($array as $num_rsorted) {
            echo $num_rsorted . '<br>';
          }
        }
      }

      // ソート関数を呼び出す(TRUE=昇順)
      sort_2way($nums, TRUE);

      // ソート関数を呼び出す(FALSE=降順)
      sort_2way($nums, FALSE);
      ?>
    </p>
  </body>

</html>