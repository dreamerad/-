<?php

$microtime = microtime(true); // Для определения времени загрузки скрипта
// сумма четных положительных чисел массива
$array = [2,2,3,4,5,122,1,3,4,4,2,2,2,2];
$sum = 0;
foreach($array as $val){
  if($val > 0 && $val % 2 == 0){


  }

  $sum += $val;
}
echo $sum. "</br>";
// Определить, какое число в массиве встречается чаще всего.
$tmp = array_count_values($array); 
$max = max($tmp);
$result = '';
foreach($tmp as $val => $key){
  if($key == $max){
    $result .= $val;
  }
}
echo "Число " .$result. " Повторяется " .$max. " раз</br>";



// Угадай число


// if (isset($_POST["guess"])) { 



//   $number = $_POST["number"]; //В переменную $number записываем данные полученные из текстового поля с именем number 
  
  
  
//   $hidden_number = $_POST["hidden_number"]; //В переменную $hidden_number записываем данные полученные из скрытого поля с именем $hidden_number 
  
  
  
  
  
  
 
//   if ($number == $_POST["hidden_number"]) { 
  
//   //Если числа равны, то мы выиграли
  
  
//   $hidden_number = rand(0, 50);
  
//    } 
  
//   } else { 
  
//   $number = 0; 
  
//   $hidden_number = rand(0, 50); //Загадываем число 
  
//   } 
  
  
//   echo '<form action="?" method="POST">
  
//   <input type="text" value="'.$number.'" name="number" /> <br />
  
//   <input type="submit" name="guess" value="Играть" /><br/>
  
//   <input type="hidden" name="hidden_number" value="'.$hidden_number.'" />
  
//   </form></br>';
// Генератор
  function generation($from, $to){
    $i = 0; // ERROR - бесконечный цикл
    for ($from; $to; $i++){
      echo "$i -";
      yield $i;  // Запись идёт в "Массив"
    }
  }
  foreach (generation(1,10) as $value){
    echo 'Удвоим ' .($value *2). '</br>'; break;
}

// Пример с JSon
// Кодирование
$array = [
  'name' => 'Владик',
  '$age' => '19',
  'email' => 'email тут'
];
$content = json_encode($array, JSON_UNESCAPED_UNICODE); // 2ой параметр меняет кодировку для кирилицы 

echo '<pre>';
var_dump($content);
echo '</pre>';

// Декодирование, чтение из файла
$url = '1.json'; // Путь файла
$content = file_get_contents($url); // Читаем содержимое файла целиком
$content = json_decode($content, true); // 2ой параметр указывает на работу с ассоциативным массивом
echo '<pre>';
var_dump($content);
echo '</pre>';

$var1 = "Hello";
$var2 = "hello222";
$var3 = 'много всякого бреда но меняем слово Hello</br><hr>';
$s = str_replace($var1, $var2, $var3);
echo $s;

// Чтение CSV файла
$fopen = fopen('test.csv', 'r');
if(($fopen) !== false){
  while(($data = fgetcsv($fopen,100,';')) !== false) // $data - вычитанная строка
{
  $out = "";
  for($i=0; $i < count($data); $i++)
  {
    $out .= $data[$i]. " ";
  }
  echo $out;
}
fclose($fopen);
echo "</br>";

}

// Чтение CSV файла через массив 
$fopen = fopen('test.csv', 'r');
$res = [];
if(($fopen) !== false){
  while(($data = fgetcsv($fopen,100,';')) !== false) // $data - вычитанная строка
{
 $res[] = $data;
 foreach ($data as $val){
   echo $val;
 }
}
fclose($fopen);
echo "</br>";
}

// Запись в CSV файл

$a = [
  [1,2,3],
  [1,2,3],
  [3,2,1]
  ];

$fopen = fopen('test.csv', 'w');
foreach($a as $line){ // в $line помещаем $a
fputcsv($fopen, $line, ';');

}
fclose($fopen);

// Запись в TXT файл
$file = 'test.txt';
$fopen = fopen($file, 'a');
$string = 'ура';
fseek($fopen, 1);
//fwrite($fopen, $string);
fclose($fopen);

// Регулярные выражения
$file = 'wqeqwe.png';
echo preg_replace("/.*?\./", '', $file); // Вырезка расширения файла
preg_match("/[^(\w)|(\@)|(\.)|(\-)]/",$email); // Проверка email
preg_match('/^\d+$/', $var); // Проверка на число
preg_match("/(^[a-zA-Z0-9]+([a-zA-Z\_0-9\.-]*))$/" , $filename)==NULL; // Проверка имени файла
preg_match("/(.)\\1\\1/",$string); // Проверка на повторение символов, более 3х раз
$text = preg_replace('#(\.|\?|!|\(|\)){3,}#', '\1\1\1', $text); // Удаление многократно повторяющихся зн.препинания
// Вывод файлов с помощью преопределенного класса directory
$cat = dir("../.vscode");
while(($file = $cat->read()) !== false) {
  echo $file. "</br>";
}
$cat->close();





?>




