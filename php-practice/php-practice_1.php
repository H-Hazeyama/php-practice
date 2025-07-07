<?php
// インデントをスペース4文字に設定
// Q1 変数と文字列
$name = '櫨山';

echo '私の名前は「' . $name . '」です。';


// Q2 四則演算
$num = 5 * 4;

echo $num . "\n";
echo $num / 2;


// Q3 日付操作
date_default_timezone_set('Asia/Tokyo'); //タイムゾーンを日本に設定
echo date("現在時刻は、Y年m月d日  H時i分s秒です。");


// Q4 条件分岐-1 if文
$device = 'windows';

if ($device === 'windows') {
    echo '使用OSは、windowsです。';
} else {
    if ($device === 'mac') {
        echo '使用OSは、macです。';
    } else {
        echo 'どちらでもありません。';
    }
}


// Q5 条件分岐-2 三項演算子
$age = 10;
$message = ($age < 18) ? '未成年です。' : '成人です。';

echo $message;


// Q6 配列
$prefectures = ['東京都', '神奈川県', '埼玉県', '栃木県', '千葉県', '茨城県', '群馬県'];

echo $prefectures[3] . 'と' . $prefectures[4] . 'は関東地方の都道府県です。';


// Q7 連想配列-1
$prefectures = ['東京都' => '新宿区', '神奈川県' => '横浜市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '千葉県' => '千葉市', '茨城県' => '水戸市', '群馬県' => '前橋市'];

foreach ($prefectures as $x => $y) {
    echo $y . "\n";
}


// Q8 連想配列-2
// $prefectures = ['東京都' => '新宿区', '神奈川県' => '横浜市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '千葉県' => '千葉市', '茨城県' => '水戸市', '群馬県' => '前橋市'];

// if ($prefectures["埼玉県"] === 'さいたま市') {
//     echo $prefectures["埼玉県"] . 'の県庁所在地は、' . $prefectures["埼玉県"] . 'です。';
// }


// Q9 連想配列-3


// Q10 関数-1


// Q11 関数-2


// Q12 関数とif文


// Q13 関数とswitch文


