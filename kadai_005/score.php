<!DOCTYPE htmal>
<html lang="ja">

<head>
  <meta chaset="UTF-8">
  <title>kadai 005</title>
</head>

<body>
  <p>
    <?php
    // 変数に値を代入する(体重)
    $score1 = 80;
    $score2 = 60;
    $score3 = 55;
    $score4 = 40;
    $score5 = 100;
    $score6 = 25;
    $score7 = 80;
    $score8 = 95;
    $score9 = 30;
    $score10 = 60;

    // 変数の合計（体重の合計）
    $score_total = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
    
    // scoreの数
     $total_number = 10;
     
    //  変数の平均（体重の平均）
     $average_weight = $score_total / $total_number;

     echo $average_weight;


    ?>
  </p>
</body>

</htmal>



