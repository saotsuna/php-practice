<?php
// Q1 変数と文字列

 $name = '「江藤」';

$newname = '私の名前は' . $name . 'です。';
echo  '私の名前は' . $name . 'です。';

// Q2 四則演算

$num= 5*4;
echo $num;

$num /= 2;
echo $num;

// Q3 日付操作

date_default_timezone_set('Asia/Tokyo') . "\n";

date("Y年m月d日 H時i分s秒") ;
// $aaaa = date("Y年m月d日 H時i分s秒");
echo '現在時刻は、' . date("Y年m月d日 H時i分s秒") . 'です。';

// Q4 条件分岐-1 if文
if ($device == 'windows' || $device =='mac') {
  echo '使用OSは、' . $device . 'です。';
 
 }  else {
     echo 'どちらでもありません。';
 }

// Q5 条件分岐-2 三項演算子
$age = 18;

$message = ($age > 18) ? '未成年です。' : '成人です。';

echo $message;

// Q6 配列
$prefectures = ["茨城県", '群馬県', '栃木県', '千葉県', '埼玉県', '神奈川県', '東京都'];
 
echo $prefectures[2] . 'と' . $prefectures[3] . 'は' . '関東地方の都道府県です。';

// Q7 連想配列-1
$prefectures = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市' ];

foreach ($prefectures as $value) {
  echo  "$value \n";
}

// Q8 連想配列-2
$prefectures = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市' ];
  
foreach ($prefectures as $key => $value) {
  if ($key == '埼玉県') {
     echo $key. 'の県庁所在地は、'. $value. 'です。';
  }

}

// Q9 連想配列-3
$prefectures = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市' ];
  
 $prefectures ['愛知県'] = '名古屋市';
 $prefectures ['大阪府'] = '大阪市';

foreach ($prefectures as $key => $value) {
    if (
        $key === '埼玉県' ||
        $key === '東京都' ||
        $key === '神奈川県' ||
        $key === '千葉県' ||
        $key === '栃木県' ||
        $key === '茨城県' ||
        $key === '群馬県'
    )
    {
      echo "\n";
      echo  $key. 'の県庁所在地は、'. $value. 'です。';
    } else {
        echo "\n";
        echo $key.'は関東地方ではありません。';
    }
}

// Q10 関数-1

function hello($name)

{
return $name."さん、こんにちは。\n";
   
}
    
echo hello('安藤');
echo hello('金谷');

// Q11 関数-2
function calcTaxInPrice($price )
{
$taxInPrice = $price * 1.1;
return $taxInPrice;
}

echo '1000円の商品の税込み価格は' . calcTaxInPrice(1000) . "円です。\n";
// Q12 関数とif文
function  distinguishNum($number)
{

    if($number % 2 == 0) {
        return $number.  "は偶数です。\n";
    }
    else
    {
        return $number . "は奇数です。\n";
    }

}

echo distinguishNum(1);
echo distinguishNum(2);

// Q13 関数とswitch文
function evaluateGrade ($evaluation)
{
    switch ($evaluation) {
    case 'A':
    case 'B':
    return "合格です。\n";
    break;

    case 'C':
    return "合格ですが追加課題があります。\n";
    break;

    case 'D':
    return "不合格です。\n";
    break;

    default:
    return "判定不明です。講師に問い合わせてください。\n";
    break;
    
  }

}

echo evaluateGrade ('A');
echo evaluateGrade ('あ');

?>