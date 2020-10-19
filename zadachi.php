<?php
// Генератор паролейпше
function gen($length = 6){
$password = '';
$arr = array(
    'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 
    'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 
    'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 
    'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 
    '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'
);

for ($i = 0; $i < $length; $i++) {
    $index = rand(0, count($arr)-1);
    $password.= $arr[$index];
}
return $password;
}

if(isset($_POST['ok']))
{
    $gen = gen((int)$_POST['rand']);
    echo $gen;
}
// Время суток в зависимости от времени
date_default_timezone_set('Europe/Moscow');

$time = date('H');
if($time < 12){
echo "Доброе утро</br>";
}
elseif($time < 16){
    echo "Добрый день</br>";
}
elseif($time < 22){
    echo "Добрый вечер</br></br>";
}
elseif($time < 5){
    echo "Доброй ночи</br>";
}
// Задача с днём недели


$num = $_POST['num'];

if(isset($_POST['num'])){
    $week = [
        1 => 'Понедельник',
        2 => 'Вторник',
        3 => 'Среда',
        4 => 'Четверг',
        5 => 'Пятница',
        6 => 'Суббота',
        7 => 'Воскресенье'
        ];
    foreach($week as $k=>$v){
    if($_POST['num'] == $k)
        echo "<b>$v</b><br />";
    else
        echo "$v<br />";
    }
}
// выборка чисел из строки и их сумма
$string = '3jgprjp43jgrj3gh8ger43';
$str = preg_replace("/[^0-9]/", '', $string);
$arr = str_split($str); 
foreach ($arr as $value) { 
$result += intval($value); 
}
echo $result;




?>

<form method = "POST">
<label>Введите длину пароля</label>
<input type = "number" name = "rand">
<input type="submit" name = "ok" value="Генерировать"></br>
<label>Введите номер дня недели от 1 до 7</label>
<input type = "number" name = "num">
<input type="submit" name = "day" value="Искать">
<label>Введите сообщение</label>
<input type = "text" name = "text">
<input type="submit" name = "ok" value="Отправить">

</form>