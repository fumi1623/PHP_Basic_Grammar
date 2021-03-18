<?php

// comment
# comment
/*
comment
comment
*/

// echo
// echo 'Hello taguchi' . PHP_EOL;
// echo 'hi taguchi' . PHP_EOL;

//変数
// $name = 'dotinstall';
// echo 'Hello ' . name . PHP_EOL;
// echo 'hi ' . name . PHP_EOL;


// $name = 'taguchi';

//  $text = <<<'EOT'  // noedoc
//   $text = <<<EOT  // heredoc
//   hello! $name
//     thid is loooooooog
//     text!
    
//   EOT;

// echo $text;

//定数
// define('NAME', 'taguchi');
// echo NAME . PHP_EOL;

// const NAME = 'taguchi';
// echo NAME . PHP_EOL;


//計算
// echo 10 + 3 . PHP_EOL;
// echo 10 - 3 . PHP_EOL;
// echo 10 * 3 . PHP_EOL;
// echo 10 / 3 . PHP_EOL;

// echo 10 % 3 . PHP_EOL;
// echo 10 ** 3 . PHP_EOL;

// echo 2 + 10 * 3 . PHP_EOL;
// echo (2 + 10) * 3 . PHP_EOL;

// echo 2 + "3" . PHP_EOL;

// $price = 500;

// $price = $price + 100;
// $price += 100;
// $price *= 100;

// $price++;
// $price--;

// echo $price . PHP_EOL;

//型
// $a = "hello";
// $b = 10;
// $c = -1.3;
// $d = null;
// $e = true;

// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);

// $b = (float)10;
// $c = (string)-1.3;

// var_dump($b);
// var_dump($c);

//条件分岐
// $score = 70;

// if ($score >= 80) {
//   echo "Great!" . PHP_EOL;
// } elseif ($score >= 60) {
//   echo "Good!" . PHP_EOL;
// } else {
//   echo "OK!" . PHP_EOL;
// }

//理論演算子
// $score = 60;
// $name = 'taguchi';

// if ($score >= 50) {
//   if ($name === 'taguchi') {
//     echo 'Good job!' . PHP_EOL;
//   }
// }

// if ($score >= 50 && $name === 'taguchi') {
//   echo 'Good job!' . PHP_EOL;
// }

//switch
// $signal = 'blue';

// if ($signal === 'red') {
//   echo 'Stop!' . PHP_EOL;
// } elseif ($signal === 'yellow') {
//   echo 'Caution!' . PHP_EOL;
// } elseif ($signal === 'blue'){
//   echo 'Go!' . PHP_EOL;
// }

// switch ($signal) {
//   case 'red':
//     echo 'Stop!' . PHP_EOL;
//     break;
//   case 'yellow':
//     echo 'Caution!' . PHP_EOL;
//     break;
//   case 'blue':
//     echo 'GO!' . PHP_EOL;
//     break;
// }
// $signal = 'pink';

// switch ($signal) {
//   case 'red':
//     echo 'Stop!' . PHP_EOL;
//     break;
//   case 'yellow':
//     echo 'Caution!' . PHP_EOL;
//     break;
//   case 'blue':
//   case 'green':
//     echo 'Go!' . PHP_EOL;
//     break;
//   default:
//     echo 'Wrong signal!' . PHP_EOL;
//     break;
// }

//ループ
// for ($i = 1; $i <= 5; $i++) {
//   echo 'hello' . PHP_EOL;
//   echo "$i - hello" . PHP_EOL;
// }

// for ($i = 1; $i <= 10; $i++) {
  // if ($i === 4) {
  // if ($i % 3 === 0) {
  //   continue;
  // }
  // if ($i === 4) {
  //   break;
  // }
//   echo $i . PHP_EOL;
// }


//while
// $hp = 100;

// while($hp > 0) {
//   echo "Your HP: $hp" . PHP_EOL;
//   $hp -= 15;
// }

// $hp = -50;

// do  {
//   echo "Your HP: $hp" . PHP_EOL;
//   $hp -= 15;
// } while($hp > 0);

//関数
// function showAd() {
//   echo '----------' . PHP_EOL;
//   echo '--- ad ---' . PHP_EOL;
//   echo '----------' . PHP_EOL;
// }

// showAd();
// echo 'Tom is great!' . PHP_EOL;
// echo 'Bob is great!' . PHP_EOL;
// showAd();
// echo 'Steve is great!' . PHP_EOL;
// echo 'Bob is great!' . PHP_EOL;
// showAd();

// function showAd($message = 'Ad')
// {
//   echo '----------' . PHP_EOL;
//   echo '--- ' . $message . ' ---' . PHP_EOL;
//   echo '----------' . PHP_EOL;
// }

// showAd('Header Ad');
// echo 'Tom is great!' . PHP_EOL;
// echo 'Bob is great!' . PHP_EOL;
// showAd();
// echo 'Steve is great!' . PHP_EOL;
// echo 'Bob is great!' . PHP_EOL;
// showAd('Footer Ad');

// function sum($a, $b, $c) {
//   echo $a + $b + $c . PHP_EOL;
//   return $a + $b + $c ;
// }

// sum(100, 200, 300);
// sum(300, 400, 500);

// echo sum(100, 200, 300) + sum(300, 400, 500) . PHP_EOL;


// $rate = 1.1;

// function sum($a, $b, $c)
// {
//   global $rate;
//   return ($a + $b + $c) * $rate;
// }

// echo sum(100, 200, 300) + sum(300, 400, 500) . PHP_EOL;

// function sum($a, $b, $c)
// {
//   return $a + $b + $c;
// }

// $sum = function ($a, $b, $c) {
//   return $a + $b + $c;
// };

// echo $sum(100, 300, 500) . PHP_EOL;

//条件演算子
// function sum($a, $b, $c) 
// {
//   $total = $a + $b + $c;
  
//   if ($total < 0) {
//     return 0;
//   } else {
//     return $total;
//   }
//   return $total < 0 ? 0 : $total;
// }

// echo sum(100, 300, 500) . PHP_EOL;
// echo sum(-1000, 300, 500) . PHP_EOL;

//型の指定
// declare(strict_type=1);

// function showInfo(string $name, int $score): void
// {
//   echo $name . ': ' . $score . PHP_EOL;
// }

// showInfo('taguchi', 40);
// showInfo('taguchi', 'dotinstall');
// showInfo('taguchi', '4');

// declare(strict_types=1);

// function getAward(?int $score): ?string
// {
//   return $score >= 100 ? 'Gold Medal' : null;
// }

// echo getAward(150) . PHP_EOL;
// echo getAward(40) . PHP_EOL;

// $score1 = 90;
// $score2 = 40;
// $score3 = 100;

// $scores = [
//   90,
//   40,
//   100,
// ];

// $scores[1] = 60;
// echo $scores[1] . PHP_EOL;

//配列キー
// $scores = [
//   'first'  => 90,
//   'second' => 40,
//   'third'  => 100,
// ];

// var_dump($scores);
// print_r($scores);

// echo $scores['third'] . PHP_EOL;

// foreach
// $scores = [
//   'first'  => 90,
//   'second' => 40,
//   'third'  => 100,
// ];

// foreach ($scores as $score) {
//   echo $score . PHP_EOL;
// }

// foreach ($scores as $key => $score) {
//   echo $key . ' - ' . $score . PHP_EOL;
// }

// $moreScores = [
//   55,
//   72,
//   'perfect',
//   [90, 42, 88],
// ];

// $scores = [
//   90,
//   40,
//   ...$moreScores,
//   100,
// ];

// print_r($scores);

// echo $scores[5][2] . PHP_EOL;

//可変長引数

// function sum(...$numbers)
// {
//   $total = 0;
//   foreach ($numbers as $number) {
//     $total += $number;
//   }
//   return $total;
// }

// echo sum (1, 3, 5) . PHP_EOL;
// echo sum (4, 3, 5, 1) . PHP_EOL;

// function getStats(...$numbers)
// {
//   $total = 0;
//   foreach ($numbers as $number) {
//     $total += $number;
//   }
//   return [$total, $total / count($numbers)];
// }

// print_r(getStats(1, 3, 5));

// list($sum, $average) = getStats(1, 3, 5);
// [$sum, $average] = getStats(1, 3, 5);

// echo $sum . PHP_EOL;
// echo $average . PHP_EOL;