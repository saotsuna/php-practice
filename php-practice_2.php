<?php
// Q1 tic-tac問題
for ($num=1; $num <=100; $num++) {
    
  if ($num % 4 === 0 && $num % 5 === 0) {
     echo "tic-tac \n";
   }
   else if ($num % 4 === 0) {
     echo "tic \n";
   }
   else if($num % 5 === 0) {
     echo "tac \n";
   }
   else {
     echo $num . "\n";
   }
 }
 

// Q2 多次元連想配列
問題１

$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel' => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel' => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel' => '09055556666'
  ],
];

echo $personalInfos [1]['name'] . 'の電話番号は' . $personalInfos [1]['tel'] . 'です。' . "\n";

問題２
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel' => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel' => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel' => '09055556666'
  ],
];

foreach ($personalInfos as $key => $class) {
  echo $key +1 . '番目の' . $class['name'] . 'のメールアドレスは' . $class['mail'] . 'で、電話番号は' . $class['tel'] . 'です。' . "\n";
 
}

問題３
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel' => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel' => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel' => '09055556666'
  ],
];

$ageList = [25, 30, 18];

foreach ($ageList as $key => $class){
  $personalInfos[$key]['age'] = $class;
}
var_dump($personalInfos);

// Q3 オブジェクト-1

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$studentId = new Student(120, '山田');


echo '学籍番号'. $studentId->studentId . '番の生徒は' . $studentId->studentName . 'です。';


// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($lesson)
    {
       
        echo $this->studentName . 'は' . $lesson . 'の' . '授業に参加しました。' . '学籍番号:' . $this->studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP') ;

// Q5 定義済みクラス
問題1
$now = new DateTime();

echo $now->modify('-1 months')->format('Y-m-d');

問題２
$date = new DateTime('2021-03-02');
$time = new DateTimeImmutable('1992-04-25');
$interval = $date->diff($time);
echo 'あの日から' . $interval->format('%a') .'日経過しました。';
?>
