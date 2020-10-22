<?php
session_start();
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


if (isset($_POST["guess"])) { 



  $number = $_POST["number"]; //В переменную $number записываем данные полученные из текстового поля с именем number 
  
  
  
  $hidden_number = $_POST["hidden_number"]; //В переменную $hidden_number записываем данные полученные из скрытого поля с именем $hidden_number 
  
  
  
  
  
  
 
  if ($number == $_POST["hidden_number"]) { 
  
  //Если числа равны, то мы выиграли
  
  
  $hidden_number = rand(0, 50);
  
   } 
  
  } else { 
  
  $number = 0; 
  
  $hidden_number = rand(0, 50); //Загадываем число 
  
  } 
  
  
  echo '<form action="?" method="POST">
  
  <input type="text" value="'.$number.'" name="number" /> <br />
  
  <input type="submit" name="guess" value="Играть" /><br/>
  
  <input type="hidden" name="hidden_number" value="'.$hidden_number.'" />
  
  </form>';
  
?>



