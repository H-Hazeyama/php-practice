<?php
// Q1 tic-tac問題
echo '1から100までのカウントを開始します。' . "\n";

for ($i = 1; $i < 101; $i++) {
  if ($i % 4 === 0 && $i % 5 === 0) {
    echo 'tic-tac' . "\n";
  } elseif ($i % 4 === 0) {
    echo 'tic' . "\n";
  } elseif ($i % 5 === 0) {
    echo 'tac' . "\n";
  } else {
    echo $i . "\n";
  }
}


// Q2 多次元連想配列


// Q3 オブジェクト-1


// Q4 オブジェクト-2


// Q5 定義済みクラス
?>