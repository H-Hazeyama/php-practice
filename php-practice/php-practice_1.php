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
    echo $message = ($device === 'mac') ? '使用OSは、macです。' : 'どちらでもありません。';
}


// Q5 条件分岐-2 三項演算子
$age = 10;
$message = ($age < 18) ? '未成年です。' : '成人です。';

echo $message;


// Q6 配列
$prefectures = [
    '東京都', 
    '神奈川県', 
    '埼玉県', 
    '栃木県', 
    '千葉県', 
    '茨城県', 
    '群馬県'
];

echo $prefectures[3] . 'と' . $prefectures[4] . 'は関東地方の都道府県です。';


// Q7 連想配列-1
$prefectures = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市', 
    '埼玉県' => 'さいたま市', 
    '栃木県' => '宇都宮市', 
    '千葉県' => '千葉市', 
    '茨城県' => '水戸市', 
    '群馬県' => '前橋市'
];

foreach ($prefectures as $x => $y) {
    echo $y . "\n";
}


// Q8 連想配列-2
$prefectures = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市', 
    '埼玉県' => 'さいたま市', 
    '栃木県' => '宇都宮市', 
    '千葉県' => '千葉市', 
    '茨城県' => '水戸市', 
    '群馬県' => '前橋市'
];

foreach ($prefectures as $key => $value) {
    if ($key === '埼玉県') {
        echo $key . 'の県庁所在地は、' . $value . 'です。';
    }
}


// Q9 連想配列-3
$prefectures = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市', 
    '埼玉県' => 'さいたま市', 
    '栃木県' => '宇都宮市', 
    '千葉県' => '千葉市', 
    '茨城県' => '水戸市', 
    '群馬県' => '前橋市', 
    '長野県' => '長野市', 
    '北海道' => '札幌市'
];

$kanto = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市', 
    '埼玉県' => 'さいたま市', 
    '栃木県' => '宇都宮市', 
    '千葉県' => '千葉市', 
    '茨城県' => '水戸市', 
    '群馬県' => '前橋市'
];

foreach ($prefectures as $key => $value) {
    if (in_array($value, $kanto)) 
    {
        echo $key . 'の県庁所在地は、' . $value . 'です。' . "\n";
    } else {
        echo $key . 'は関東地方ではありません。' . "\n";
    }
}


// Q10 関数-1
function hello($name) {
    echo $name . 'さん、こんにちは。' . "\n";
}

$hello = hello('田中');
$hello = hello('鈴木');


// Q11 関数-2
function calcTaxInPrice($price) {
    return $price * 1.1;
}

$price = 1000;
$taxInPrice = calcTaxInPrice($price);

echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。';


// Q12 関数とif文
function distinguishNum($num) {
    if ($num % 2 === 0) {
        echo $num . 'は偶数です。' . "\n";
    } else {
        echo $num . 'は奇数です。' . "\n";
    }
}

$distinguish = distinguishNum(11);
$distinguish = distinguishNum(24);


// Q13 関数とswitch文
function evaluateGrade($point) {
    switch ($point) {
        case 'A':
        case 'B':
            $result = '合格です。' . "\n";
            return $result;
        
        case 'C':
            $result = '合格ですが追加課題があります。' . "\n";
            return $result;

        case 'D':
            $result = '不合格です。' . "\n";
            return $result;

        default:
            $result = '判定不明です。講師に問い合わせてください。' . "\n";
            return $result;
    }
}

echo evaluateGrade('A');
echo evaluateGrade('');