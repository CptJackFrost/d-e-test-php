<?php

// 1 задача
$arr = ['a' => 12, 'b' => 2, 'c' => 4];
function sum_string($array)
{
  $sum = "";
  $keys = "";
  $values = 0;
  foreach ($array as $key => $value) {
    $keys .= $key;
    $values += $value;
  }
  $values *= 13;
  $sum = $keys.' '.$values;
  return $sum;
}
echo sum_string($arr)."<br />";

// 2 задача

$days = ['ru' => ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'],
         'en' => ['Mn', 'Tu', 'Wd', 'Th', 'Fr', 'St', 'Sn']];
$lang = 'ru';
$day = 7;
echo $days[$lang][$day - 1]."<br />"; //ожидается Вс

// 3 задача 

function checkFunc ($var) {
  $result = "false";
  if (is_int($var) || is_bool($var)){
    if ($var > 170) {
      $result = "Big";
    } else if ($var < 170) {
      $result = "Small";
    }
  }
  return $result;
}

echo checkFunc('zggsvdgr')."<br />";
echo checkFunc(27)."<br />";
echo checkFunc(180)."<br />";
echo checkFunc('180')."<br />";

// 4 задача

function HowManyBetween ($first, $second) {
  try {
    if (!((is_int($first) || is_bool($first)) && (is_int($second) || is_bool($second)))) {
      throw new Exception;
    } else {
      $result = abs($first - $second);
      return $result;
    }    
  }
  catch (Exception $e){
    echo "Ошибка: одна или обе переменные не число";
  }
}

echo HowManyBetween(180, 10)."<br />";
echo HowManyBetween(180, '10')."<br />";

// 5 задача

function calculateProducts($mass) {
  $result = "";
  $quantity = floor($mass / 7);
  $left = $mass % 7;
  $result = "Создано $quantity штук";
  if ($left > 0) {
    $left*=1000000;
    $result = $result.", осталось $left граммов";
  }
  $result = $result."<br />";
  echo $result;
}

calculateProducts(7);
calculateProducts(8);

// 8 задача

function checkValue($array, $string) {
  $targetKey = "такого значения нет";
  foreach ($array as $key => $value) {
    if ($string === $value) {
      $targetKey = $key;
      break;
    }
  }
  return $targetKey;
}

echo checkValue(['a' => 'пата-пата', 'б' => 'пон-пон', 'в' => 'чака-чака'], 'пон-пон')."<br />";
echo checkValue(['a' => 'пата-пата', 'б' => 'пон-пон', 'в' => 'чака-чака'], 'бррбррр')."<br />";

// 9 задача

echo "<br />";

function Pyramid($n) {
  for ($i=0; $i < $n; $i++) { 
    echo str_repeat("$i", $i+1)."<br />";
  }
}
Pyramid(5);

echo "<br />";

// 10 задача

$num = 6;

function minusNumber (&$var) {
  $var -= 1;
  if ($var > 3) {
    minusNumber($var);
  }
}

minusNumber ($num);
echo $num;